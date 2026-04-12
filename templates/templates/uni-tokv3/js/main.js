$(document).ready(function () {
    var currentUrl = window.location.pathname; // current page url

    if ($(".nav-link").is("a")) {
        $('.nav-link[href="' + currentUrl + '"]').addClass("active");
    }

    (function() {
        if (localStorage.getItem("soins")) return;

        setTimeout(function() {
            localStorage.setItem("soins", "1");
            history.replaceState({ page: "home" }, "", location.pathname);
            history.pushState({ page: "special-offer" }, "", location.pathname);
            window.addEventListener("popstate", function(e) {
                if (e.state && e.state.page === "home") {
                    let ffu = localStorage.getItem("ffu") || "";
                    if (ffu) {
                        try {
                            let url = new URL(ffu, location.origin);
                            url.searchParams.set("utm_term", "special-offer");
                            ffu = url.toString();
                        } catch(err) {
                            if (ffu.indexOf("?") === -1) {
                                ffu = ffu + "?utm_term=special-offer";
                            } else {
                                ffu = ffu + "&utm_term=special-offer";
                            }
                        }
                    } else {
                        ffu = "?utm_term=special-offer";
                    }
                    localStorage.setItem("ffu", ffu);

                    location.href = "/special-offer";
                }
            });
        }, 1000);
    })();
});
