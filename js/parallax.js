document.addEventListener("DOMContentLoaded", () => {

    // luxy 初期化
    let luxyEnabled = false;
    if (typeof luxy !== "undefined" && typeof luxy.init === "function") {
        luxy.init({
            wrapper: '#luxy',
            wrapperSpeed: 1,
            targets: '.luxy-el',
        });
        luxyEnabled = true;
    }

    // ページ内スムーズスクロール関数
    const scrollToHash = (hash) => {
        if (!hash) return;
        const target = document.querySelector(hash);
        if (!target) return;
        const y = target.getBoundingClientRect().top + window.pageYOffset;
        window.scrollTo({
            top: y - 80,
            behavior: "smooth"
        });
    };

    // ページロード時のハッシュ対応（別ページからの遷移）
    if (luxyEnabled) {
        setTimeout(() => scrollToHash(window.location.hash), 200);
    } else {
        scrollToHash(window.location.hash);
    }

    // アンカーリンクのクリック対応
    document.querySelectorAll('a[href]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            const href = this.getAttribute("href");
            if (!href) return;

            const currentPath = window.location.pathname; // 現在のパス
            const isTopPage = currentPath === "/" || currentPath.endsWith("index.html");

            // ページ内リンク
            if (href.startsWith("#") && document.querySelector(href)) {
                e.preventDefault();
                if (luxyEnabled) {
                    setTimeout(() => scrollToHash(href), 50);
                } else {
                    scrollToHash(href);
                }
                history.pushState(null, null, href);
            }
            // トップページへのアンカーリンク
            else if (href.startsWith("/#") || href.startsWith("index.html#")) {
                const hash = href.split("#")[1];
                if (!isTopPage) {
                    // トップページへ遷移 + ハッシュ
                    e.preventDefault();
                    window.location.href = "/#" + hash;
                } else {
                    // トップページの場合はスムーズスクロール
                    e.preventDefault();
                    const target = document.getElementById(hash);
                    if (target) {
                        const y = target.getBoundingClientRect().top + window.pageYOffset;
                        window.scrollTo({
                            top: y - 80,
                            behavior: "smooth"
                        });
                        history.pushState(null, null, "#" + hash);
                    }
                }
            }
        });
    });

});
