"use strict";

// アニメーションパターンを定義
const animationPatterns = {
  // ページ読み込み時に即座に表示（ScrollTrigger無し）
  "js-top": {
    from: { opacity: 0, y: 50 },
    to: { duration: 1.5, opacity: 1, y: 0, stagger: 0.8, ease: "power3.out" },
    useScrollTrigger: false,
  },
  // フェードイン（下から上へ）
  "js-fadeUp": {
    from: { opacity: 0, y: 30 },
    to: { duration: 1.5, opacity: 1, y: 0, stagger: 0.3, ease: "power3.out" },
    useScrollTrigger: true,
  },
  // シンプルなフェードイン（移動なし）
  "js-fadeIn": {
    from: { opacity: 0 },
    to: { duration: 1.2, opacity: 1, stagger: 0.2, ease: "power2.out" },
    useScrollTrigger: true,
  },
  // 左からフェードイン
  "js-fadeLeft": {
    from: { opacity: 0, x: -30 },
    to: { duration: 1.2, opacity: 1, x: 0, stagger: 0.2, ease: "power3.out" },
    useScrollTrigger: true,
  },
  // 右からフェードイン
  "js-fadeRight": {
    from: { opacity: 0, x: 30 },
    to: { duration: 1.2, opacity: 1, x: 0, stagger: 0.2, ease: "power3.out" },
    useScrollTrigger: true,
  },
  // スケールイン
  "js-scaleIn": {
    from: { opacity: 0, scale: 0.9 },
    to: {
      duration: 1.2,
      opacity: 1,
      scale: 1,
      stagger: 0.2,
      ease: "power3.out",
    },
    useScrollTrigger: true,
  },
  // 既存のセカンドアニメーション
  "js-second": {
    from: { opacity: 0, y: 30 },
    to: { duration: 1.5, opacity: 1, y: 0, stagger: 0.3, ease: "power3.out" },
    useScrollTrigger: true,
  },
};

// アニメーションを適用する汎用関数
function initScrollAnimations() {
  gsap.registerPlugin(ScrollTrigger);

  Object.keys(animationPatterns).forEach((className) => {
    const elements = document.querySelectorAll(`.${className}`);

    if (elements.length === 0) return; // 要素がなければスキップ

    const pattern = animationPatterns[className];
    const { from, to, useScrollTrigger, trigger } = pattern;

    if (useScrollTrigger) {
      // ScrollTriggerを使用する場合 - 各要素に個別に適用
      elements.forEach((element, index) => {
        const toConfig = { ...to };

        // staggerは個別要素には不要なので削除
        delete toConfig.stagger;

        // ScrollTrigger設定 - カスタムトリガーがあれば使用、なければ要素自身をトリガーに
        toConfig.scrollTrigger = {
          trigger: trigger || element, // カスタムトリガーがあれば使用、なければ要素自身
          start: "0% 80%", // 画面の80%の位置で発火
          // markers: true, // デバッグ用（必要に応じてコメント解除）
        };

        gsap.fromTo(element, from, toConfig);
      });
    } else {
      // ScrollTrigger無し（即座にアニメーション）
      gsap.fromTo(`.${className}`, from, to);
    }
  });
}

/**
 * スクロールブロック切り替えアニメーション
 * .p-top-scroll__block を1ブロックずつふわっと切り替える
 * スクロールに応じてセクションをピン留めし、ブロックを順次切り替え
 */
function initScrollBlockTransitions() {
  // コンテナとブロック要素を取得
  const container = document.querySelector('.p-top-scroll__content');
  const blocks = document.querySelectorAll('.p-top-scroll__block');

  // 要素が存在しない場合は処理を終了
  if (!container || blocks.length === 0) return;

  // 初期状態の設定：最初のブロックのみ表示
  blocks.forEach((block, index) => {
    gsap.set(block, {
      opacity: index === 0 ? 1 : 0,
      position: 'absolute',
      top: 0,
      left: 0,
      width: '100%'
    });
  });

  // タイムラインを作成
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      start: "top top", // コンテナが画面トップに来たらピン留め開始
      end: `+=${blocks.length * 100}%`, // ブロック数に応じてスクロール距離を設定
      pin: true, // セクションをピン留め
      scrub: 1, // スクロールに滑らかに追従（1秒の遅延）
      anticipatePin: 1,
      // markers: true, // デバッグ用（必要に応じてコメント解除）
    }
  });

  // 各ブロックの切り替えアニメーションを追加
  blocks.forEach((block, index) => {
    if (index < blocks.length - 1) {
      // 現在のブロックをフェードアウト
      tl.to(block, {
        opacity: 0,
        duration: 1,
        ease: "power2.inOut"
      }, index);

      // 次のブロックをフェードイン
      tl.fromTo(blocks[index + 1],
        { opacity: 0 },
        {
          opacity: 1,
          duration: 1,
          ease: "power2.inOut"
        },
        index
      );
    }
  });
}

// ページ読み込み時に実行
window.addEventListener("DOMContentLoaded", function () {
  initScrollAnimations();
  initScrollBlockTransitions(); // スクロールブロック切り替えアニメーションを追加
});
