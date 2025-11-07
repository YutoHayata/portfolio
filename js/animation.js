const bodyOpen = document.getElementById("body");
const titleBoxLoadAnimation = document.querySelector(".title-box--load-animation");
const textBoxLoadAnimation = document.querySelectorAll(".text-box--load-animation");
window.addEventListener('load', function() {
    bodyOpen.classList.add("body__load");
    // タイトルアニメーション
    if (titleBoxLoadAnimation) {
        titleBoxLoadAnimation.classList.add("text-appear__glidge");
    }

    // テキストボックス（複数）にクラスを順次付与
    textBoxLoadAnimation.forEach(el => {
        el.classList.add("text-appear__feed-in");
    });
});

function setupTextAppearObserver() {
  const targetsTitle = document.querySelectorAll('.title-box--scroll-animation');
  const targetsText = document.querySelectorAll('.text-box--scroll-animation');
  const targetsImage = document.querySelectorAll('.image-box--scroll-animation');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {

        // 要素の種類によって付与クラスを切り替え
        if (entry.target.classList.contains('title-box--scroll-animation')) {
          entry.target.classList.add('text-appear__glidge');
        } else if (entry.target.classList.contains('text-box--scroll-animation')) {
          entry.target.classList.add('text-appear__feed-in');
        } else if (entry.target.classList.contains('image-box--scroll-animation')) {
          entry.target.classList.add('image-appear__feed-in');
        }

        observer.unobserve(entry.target); // 一度だけアニメーション
      }
    });
  }, {
    threshold: 0.1 // 50%見えたら発火
  });

  // 監視対象をまとめて登録
  [...targetsTitle, ...targetsText, ...targetsImage].forEach(el => observer.observe(el));
}

// ページ読み込み時に初期化
window.addEventListener('load', () => {
  setupTextAppearObserver();
});

