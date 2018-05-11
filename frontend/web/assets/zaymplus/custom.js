function myFunction() {
    loader = setTimeout(showPage, 500)
}

function showPage() {
    $("#loader").css("display", "none");
    $("#main-page-wrapper").fadeIn("slow").css("display", "block");
    $("#login-area-wrapper").fadeIn("slow").css("display", "block");
    $("#registration-page-wrapper").fadeIn("slow").css("display", "block")
}

function popupOpen() {
    const n = window.matchMedia("(min-width: 1024px)");
    n.matches && $("#sign-up-modal").modal("show")
}

function rand(n, t) {
    return Math.floor(Math.random() * (t - n + 1)) + n
}


function startTimer(n, t) {
    var u = n,
        i, r;
    setInterval(function() {
        i = parseInt(u / 60, 10);
        r = parseInt(u % 60, 10);
        i = i < 10 ? "0" + i : i;
        r = r < 10 ? "0" + r : r;
        t.text(i + ":" + r);
        --u < 0 && (u = n)
    }, 1e3)
}

function popupOpenReg() {
    const n = window.matchMedia("(min-width: 1024px)");
    n.matches && $("#sign-up-modal-reg").modal("show")
}

function memberFirstRand(n, t) {
    return n + Math.floor(Math.random() * t)
}

function memberFirstCom(n) {
    while (/(\d+)(\d{3})/.test(n.toString())) n = n.toString().replace(/(\d+)(\d{3})/, "$1,$2");
    return n
}

function memberFirstChanges() {
    var n = memberFirstRand(0, memberFirstnames.length),
        t = memberFirstnames[n],
        i = memberFirstimages[n],
        r = memberFirstRand(100, 500);
    document.getElementById("MemberImageFirst").src = "/assets/zaymplus/first/" + i;
    document.getElementById("MemberNameFirst").innerHTML = t;
    document.getElementById("ProfitFirst").innerHTML = "$" + r;
    setTimeout(memberFirstChanges, memberFirstRand(3e3, 4e3))
}

function memberSecondRand(n, t) {
    return n + Math.floor(Math.random() * t)
}

function memberSecondCom(n) {
    while (/(\d+)(\d{3})/.test(n.toString())) n = n.toString().replace(/(\d+)(\d{3})/, "$1,$2");
    return n
}

function memberSecondChanges() {
    var n = memberSecondRand(0, memberSecondnames.length),
        t = memberSecondnames[n],
        i = memberSecondimages[n],
        r = memberSecondRand(100, 500);
    document.getElementById("MemberImageSecond").src = "/assets/zaymplus/second/" + i;
    document.getElementById("MemberNameSecond").innerHTML = t;
    document.getElementById("ProfitSecond").innerHTML = "$" + r;
    setTimeout(memberSecondChanges, memberSecondRand(3e3, 4e3))
}

function memberThirdRand(n, t) {
    return n + Math.floor(Math.random() * t)
}

function memberThirdCom(n) {
    while (/(\d+)(\d{3})/.test(n.toString())) n = n.toString().replace(/(\d+)(\d{3})/, "$1,$2");
    return n
}

function memberThirdChanges() {
    var n = memberThirdRand(0, memberThirdnames.length),
        t = memberThirdnames[n],
        i = memberThirdimages[n],
        r = memberThirdRand(100, 500);
    document.getElementById("MemberImageThird").src = "/assets/zaymplus/third/" + i;
    document.getElementById("MemberNameThird").innerHTML = t;
    document.getElementById("ProfitThird").innerHTML = "$" + r;
    setTimeout(memberThirdChanges, memberThirdRand(3e3, 4e3))
}

function memberForthRand(n, t) {
    return n + Math.floor(Math.random() * t)
}

function memberForthCom(n) {
    while (/(\d+)(\d{3})/.test(n.toString())) n = n.toString().replace(/(\d+)(\d{3})/, "$1,$2");
    return n
}

function memberForthChanges() {
    var n = memberForthRand(0, memberForthnames.length),
        t = memberForthnames[n],
        i = memberForthimages[n],
        r = memberThirdRand(100, 500);
    document.getElementById("MemberImageForth").src = "/assets/zaymplus/forth/" + i;
    document.getElementById("MemberNameForth").innerHTML = t;
    document.getElementById("ProfitForth").innerHTML = "$" + r;
    setTimeout(memberForthChanges, memberForthRand(3e3, 4e3))
}

function LoaderOn() {
    $("#main-page-wrapper").fadeIn("slow").css("display", "none");
    $("#registration-page-wrapper").fadeIn("slow").css("display", "none");
    $("body > *").hide();
    $("#loader").css("display", "block")
}

function LoaderOff() {
    $("#loader").css("display", "none");
    $("#main-page-wrapper").fadeIn("slow").css("display", "block");
    $("#registration-page-wrapper").fadeIn("slow").css("display", "block");
    $("body > *").not("#loader").not("#cboxOverlay").not("#colorbox").not(".modal").show()
}

function getRandom(n, t) {
    return Math.floor(Math.random() * (t - n)) + n
}
var loader, c, hideDelay, memberFirstnames, memberFirstimages, memberSecondnames, memberSecondimages, memberThirdnames, memberThirdimages, memberForthnames, memberForthimages, QueryString;

hideDelay = !0;
$("#sign-up-modal").on("hide.bs.modal", function() {
    return hideDelay ? ($(".modal-content").removeClass("animated zoomIn").addClass("animated zoomOut"), hideDelay = !1, setTimeout(function() {
        $("#sign-up-modal").modal("hide");
        $(".modal-content").removeClass("animated zoomOut").addClass("animated zoomIn")
    }, 700), !1) : (hideDelay = !0, !0)
});
c = rand(1, 5);
$(".vip-counter-number").html(c);
c = rand(101, 110);
$(".online-counter-number").html(c);
jQuery(function(n) {
    var t = n("#main-page-counter");
    startTimer(420, t)
});
hideDelay = !0;
$("#video-review-modal-one").on("hide.bs.modal", function() {
    return hideDelay ? ($(".modal-content").removeClass("animated zoomIn").addClass("animated zoomOut"), hideDelay = !1, setTimeout(function() {
        $("#video-review-modal-one").modal("hide");
        $(".modal-content").removeClass("animated zoomOut").addClass("animated zoomIn")
    }, 700), !1) : (hideDelay = !0, !0)
});
$("#sign-up-modal-reg").on("hide.bs.modal", function() {
    return hideDelay ? ($(".modal-content").removeClass("animated zoomIn").addClass("animated zoomOut"), hideDelay = !1, setTimeout(function() {
        $("#sign-up-modal-reg").modal("hide");
        $(".modal-content").removeClass("animated zoomOut").addClass("animated zoomIn")
    }, 700), !1) : (hideDelay = !0, !0)
});
$("#video-review-modal-two").on("hide.bs.modal", function() {
    return hideDelay ? ($(".modal-content").removeClass("animated zoomIn").addClass("animated zoomOut"), hideDelay = !1, setTimeout(function() {
        $("#video-review-modal-two").modal("hide");
        $(".modal-content").removeClass("animated zoomOut").addClass("animated zoomIn")
    }, 700), !1) : (hideDelay = !0, !0)
});
$("#video-review-modal-three").on("hide.bs.modal", function() {
    return hideDelay ? ($(".modal-content").removeClass("animated zoomIn").addClass("animated zoomOut"), hideDelay = !1, setTimeout(function() {
        $("#video-review-modal-three").modal("hide");
        $(".modal-content").removeClass("animated zoomOut").addClass("animated zoomIn")
    }, 700), !1) : (hideDelay = !0, !0)
});
$("#video-review-modal-four").on("hide.bs.modal", function() {
    return hideDelay ? ($(".modal-content").removeClass("animated zoomIn").addClass("animated zoomOut"), hideDelay = !1, setTimeout(function() {
        $("#video-review-modal-four").modal("hide");
        $(".modal-content").removeClass("animated zoomOut").addClass("animated zoomIn")
    }, 700), !1) : (hideDelay = !0, !0)
});
memberFirstnames = ["Татьяна", "Лия", "Эльдар", "Николай", "Владимир", "Ольга", "Евгений", "Владислав", "Олег", "Илья", "Виктор", "Аркадий", "Вадим", "Людмила", "Александра", "Виталий", "Петр", "Сильвестр", "Анна", "Инна", "Евгений", "Юрий", "Сергей", "Елена", "Екатерина", "Юрий", "Антон", "Ирина", "Виталик", "Роман", "Егор", "Остап", "Руслан", "Вадим", "Карина", "Никита", "Константин", "Григорий", "Валентина", "Артур", "Маргарита", "Антонина", "Кира", "Нина", "Кирилл", "Елизавета", "Николай", "Диана"];
memberFirstimages = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg", "08.jpg", "09.jpg", "010.jpg", "011.jpg", "012.jpg", "013.jpg", "014.jpg", "015.jpg", "016.jpg", "017.jpg", "018.jpg", "019.jpg", "020.jpg", "021.jpg", "022.jpg", "023.jpg", "024.jpg", "025.jpg", "026.jpg", "027.jpg", "028.jpg", "029.jpg", "030.jpg", "031.jpg", "032.jpg", "033.jpg", "034.jpg", "035.jpg", "036.jpg", "037.jpg", "038.jpg", "039.jpg", "040.jpg", "041.jpg", "042.jpg", "043.jpg", "044.jpg", "045.jpg", "046.jpg", "047.jpg", "048.jpg"];
$("#MemberImageFirst").length > 0 && (setTimeout(memberFirstChanges, memberFirstRand(3e3, 5e3)), memberFirstChanges());
memberSecondnames = ["Александр", "Марк", "Юрий", "Анна", "Владимир", "Мария", "Максим", "Михаил", "Олег", "Наталья", "Виктор", "Аркадий", "Александр", "Руслан", "Александр", "Виталий", "Петр", "Ольга", "Борис", "Влад", "Денис", "Остап", "Диана", "Кирилл", "Нина", "Константин", "Григорий", "Маргарита", "Карина", "Эрик", "Марго", "Виталий", "Анастасия", "Эля", "Антон", "Катерина", "Даниил", "Игорь", "Марк", "Виктор ", "Владимир", "Мария", "Юлия", "Яна", "Анна", "Анастасия", "Алексей", "Игорь"];
memberSecondimages = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg", "08.jpg", "09.jpg", "010.jpg", "011.jpg", "012.jpg", "013.jpg", "014.jpg", "015.jpg", "016.jpg", "017.jpg", "018.jpg", "019.jpg", "020.jpg", "021.jpg", "022.jpg", "023.jpg", "024.jpg", "025.jpg", "026.jpg", "027.jpg", "028.jpg", "029.jpg", "030.jpg", "031.jpg", "032.jpg", "033.jpg", "034.jpg", "035.jpg", "036.jpg", "037.jpg", "038.jpg", "039.jpg", "040.jpg", "041.jpg", "042.jpg", "043.jpg", "044.jpg", "045.jpg", "046.jpg", "047.jpg", "048.jpg"];
$("#MemberImageSecond").length > 0 && (setTimeout(memberSecondChanges, memberSecondRand(3e3, 5e3)), memberSecondChanges());
memberThirdnames = ["Александр", "Леонид", "Арина", "Вадим", "Владимир", "Лев", "Дарья", "Наталья", "Олег", "Давид", "Виктор", "Мария", "Ангелина", "Елизавета", "Александр", "Виталий", "Ольга", "Эльвира", "Сергей", "Влад", "Карина", "Остап", "Диана", "Кирилл", "Нина", "Елена", "Григорий", "Маргарита", "Леонид", "Зоя", "Сергей", "Виталий", "Алексей", "Анастасия", "Олег", "Владлен", "Яна", "Игорь", "Борис", "Мария", "Стас", "Алина", "Александр", "Артём", "Артур", "Богдан", "Руслан", "Иван"];
memberThirdimages = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg", "08.jpg", "09.jpg", "010.jpg", "011.jpg", "012.jpg", "013.jpg", "014.jpg", "015.jpg", "016.jpg", "017.jpg", "018.jpg", "019.jpg", "020.jpg", "021.jpg", "022.jpg", "023.jpg", "024.jpg", "025.jpg", "026.jpg", "027.jpg", "028.jpg", "029.jpg", "030.jpg", "031.jpg", "032.jpg", "033.jpg", "034.jpg", "035.jpg", "036.jpg", "037.jpg", "038.jpg", "039.jpg", "040.jpg", "041.jpg", "042.jpg", "043.jpg", "044.jpg", "045.jpg", "046.jpg", "047.jpg", "048.jpg"];
$("#MemberImageThird").length > 0 && (setTimeout(memberThirdChanges, memberThirdRand(3e3, 5e3)), memberThirdChanges());
memberForthnames = ["Вадим", "Владимир", "Влад", "Анна", "Олег", "Лев", "Виктор", "Игорь", "Олег", "Давид", "Мария", "Александр", "Алексей", "Виталий", "Влад", "Ольга", "Сергей", "Андрей", "Мария", "Василиса", "Оксана", "Руслан", "Михаил", "Дмитрий", "Евгений", "Павел", "Артур", "Леонид", "Богдан", "Елизавета", "Виталий", "Марина", "Константин", "Тарас", "Филипп", "Полина", "Анжела", "Матвей", "Дмитрий", "Стас", "Никита", "Ярослав", "Светлана", "Николай", "Людмила", "Демьян", "Константин", "София", "Лариса", "Аркадий"];
memberForthimages = ["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg", "06.jpg", "07.jpg", "08.jpg", "09.jpg", "010.jpg", "011.jpg", "012.jpg", "013.jpg", "014.jpg", "015.jpg", "016.jpg", "017.jpg", "018.jpg", "019.jpg", "020.jpg", "021.jpg", "022.jpg", "023.jpg", "024.jpg", "025.jpg", "026.jpg", "027.jpg", "028.jpg", "029.jpg", "030.jpg", "031.jpg", "032.jpg", "033.jpg", "034.jpg", "035.jpg", "036.jpg", "037.jpg", "038.jpg", "039.jpg", "040.jpg", "041.jpg", "042.jpg", "043.jpg", "044.jpg", "045.jpg", "046.jpg", "047.jpg", "048.jpg", "049.jpg", "050.jpg"];
$("#MemberImageForth").length > 0 && (setTimeout(memberForthChanges, memberForthRand(3e3, 5e3)), memberForthChanges());
! function(n, t) {
    function v(n, t) {
        var i = n.createElement("p"),
            r = n.getElementsByTagName("head")[0] || n.documentElement;
        return i.innerHTML = "x<style>" + t + "<\/style>", r.insertBefore(i.lastChild, r.firstChild)
    }

    function h() {
        var n = i.elements;
        return "string" == typeof n ? n.split(" ") : n
    }

    function y(n, t) {
        var r = i.elements;
        "string" != typeof r && (r = r.join(" "));
        "string" != typeof n && (n = n.join(" "));
        i.elements = r + " " + n;
        f(t)
    }

    function u(n) {
        var t = a[n[l]];
        return t || (t = {}, s++, n[l] = s, a[s] = t), t
    }

    function c(n, i, f) {
        if (i || (i = t), r) return i.createElement(n);
        f || (f = u(i));
        var e;
        return e = f.cache[n] ? f.cache[n].cloneNode() : k.test(n) ? (f.cache[n] = f.createElem(n)).cloneNode() : f.createElem(n), !e.canHaveChildren || b.test(n) || e.tagUrn ? e : f.frag.appendChild(e)
    }

    function p(n, i) {
        if (n || (n = t), r) return n.createDocumentFragment();
        i = i || u(n);
        for (var e = i.frag.cloneNode(), f = 0, o = h(), s = o.length; s > f; f++) e.createElement(o[f]);
        return e
    }

    function w(n, t) {
        t.cache || (t.cache = {}, t.createElem = n.createElement, t.createFrag = n.createDocumentFragment, t.frag = t.createFrag());
        n.createElement = function(r) {
            return i.shivMethods ? c(r, n, t) : t.createElem(r)
        };
        n.createDocumentFragment = Function("h,f", "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" + h().join().replace(/[\w\-:]+/g, function(n) {
            return t.createElem(n), t.frag.createElement(n), 'c("' + n + '")'
        }) + ");return n}")(i, t.frag)
    }

    function f(n) {
        n || (n = t);
        var f = u(n);
        return !i.shivCSS || e || f.hasCSS || (f.hasCSS = !!v(n, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), r || w(n, f), n
    }
    var e, r, o = n.html5 || {},
        b = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
        k = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
        l = "_html5shiv",
        s = 0,
        a = {},
        i;
    ! function() {
        try {
            var n = t.createElement("a");
            n.innerHTML = "<xyz><\/xyz>";
            e = "hidden" in n;
            r = 1 == n.childNodes.length || function() {
                t.createElement("a");
                var n = t.createDocumentFragment();
                return "undefined" == typeof n.cloneNode || "undefined" == typeof n.createDocumentFragment || "undefined" == typeof n.createElement
            }()
        } catch (i) {
            e = !0;
            r = !0
        }
    }();
    i = {
        elements: o.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video",
        version: "3.7.3",
        shivCSS: o.shivCSS !== !1,
        supportsUnknownElements: r,
        shivMethods: o.shivMethods !== !1,
        type: "default",
        shivDocument: f,
        createElement: c,
        createDocumentFragment: p,
        addElements: y
    };
    n.html5 = i;
    f(t);
    "object" == typeof module && module.exports && (module.exports = i)
}("undefined" != typeof window ? window : this, document),
function(n, t, i) {
    function h(i, r, u) {
        var f = t.createElement(i);
        return r && (f.id = e + r), u && (f.style.cssText = u), n(f)
    }

    function ai() {
        return i.innerHeight ? i.innerHeight : n(i).height()
    }

    function kt(t, i) {
        i !== Object(i) && (i = {});
        this.cache = {};
        this.el = t;
        this.value = function(t) {
            var r;
            return this.cache[t] === undefined && (r = n(this.el).attr("data-cbox-" + t), r !== undefined ? this.cache[t] = r : i[t] !== undefined ? this.cache[t] = i[t] : ni[t] !== undefined && (this.cache[t] = ni[t])), this.cache[t]
        };
        this.get = function(t) {
            var i = this.value(t);
            return n.isFunction(i) ? i.call(this.el, this) : i
        }
    }

    function dt(n) {
        var i = c.length,
            t = (v + n) % i;
        return t < 0 ? i + t : t
    }

    function a(n, t) {
        return Math.round((/%/.test(n) ? (t === "x" ? g.width() : ai()) / 100 : 1) * parseInt(n, 10))
    }

    function pi(n, t) {
        return n.get("photo") || n.get("photoRegex").test(t)
    }

    function wi(n, t) {
        return n.get("retinaUrl") && i.devicePixelRatio > 1 ? t.replace(n.get("photoRegex"), n.get("retinaSuffix")) : t
    }

    function bi(n) {
        "contains" in u[0] && !u[0].contains(n.target) && n.target !== d[0] && (n.stopPropagation(), u.focus())
    }

    function at(n) {
        at.str !== n && (u.add(d).removeClass(at.str).addClass(n), at.str = n)
    }

    function gi(t) {
        v = 0;
        t && t !== !1 && t !== "nofollow" ? (c = n("." + ft).filter(function() {
            var i = n.data(this, y),
                r = new kt(this, i);
            return r.get("rel") === t
        }), v = c.index(r.el), v === -1 && (c = c.add(r.el), v = c.length - 1)) : c = n(r.el)
    }

    function ut(i) {
        n(t).trigger(i);
        w.triggerHandler(i)
    }

    function gt(i) {
        var e, f;
        if (!lt) {
            if (e = n(i).data(y), r = new kt(i, e), gi(r.get("rel")), !it) {
                it = ct = !0;
                at(r.get("className"));
                u.css({
                    visibility: "hidden",
                    display: "block",
                    opacity: ""
                });
                l = h(s, "LoadedContent", "width:0; height:0; overflow:hidden; visibility:hidden");
                p.css({
                    width: "",
                    height: ""
                }).append(l);
                b = ri.height() + ei.height() + p.outerHeight(!0) - p.height();
                k = ui.width() + fi.width() + p.outerWidth(!0) - p.width();
                nt = l.outerHeight(!0);
                tt = l.outerWidth(!0);
                var c = a(r.get("initialWidth"), "x"),
                    v = a(r.get("initialHeight"), "y"),
                    g = r.get("maxWidth"),
                    rt = r.get("maxHeight");
                if (r.w = Math.max((g !== !1 ? Math.min(c, a(g, "x")) : c) - tt - k, 0), r.h = Math.max((rt !== !1 ? Math.min(v, a(rt, "y")) : v) - nt - b, 0), l.css({
                        width: "",
                        height: r.h
                    }), o.position(), ut(di), r.get("onOpen"), hi.add(oi).hide(), u.focus(), r.get("trapFocus") && t.addEventListener) {
                    t.addEventListener("focus", bi, !0);
                    w.one(ii, function() {
                        t.removeEventListener("focus", bi, !0)
                    })
                }
                if (r.get("returnFocus")) w.one(ii, function() {
                    n(r.el).focus()
                })
            }
            f = parseFloat(r.get("opacity"));
            d.css({
                opacity: f === f ? f : "",
                cursor: r.get("overlayClose") ? "pointer" : "",
                visibility: "visible"
            }).show();
            r.get("closeButton") ? bt.html(r.get("close")).appendTo(p) : bt.appendTo("<div/>");
            ir()
        }
    }

    function ki() {
        u || (li = !1, g = n(i), u = h(s).attr({
            id: y,
            "class": n.support.opacity === !1 ? e + "IE" : "",
            role: "dialog",
            tabindex: "-1"
        }).hide(), d = h(s, "Overlay").hide(), wt = n([h(s, "LoadingOverlay")[0], h(s, "LoadingGraphic")[0]]), rt = h(s, "Wrapper"), p = h(s, "Content").append(oi = h(s, "Title"), si = h(s, "Current"), ht = n('<button type="button"/>').attr({
            id: e + "Previous"
        }), st = n('<button type="button"/>').attr({
            id: e + "Next"
        }), et = n('<button type="button"/>').attr({
            id: e + "Slideshow"
        }), wt), bt = n('<button type="button"/>').attr({
            id: e + "Close"
        }), rt.append(h(s).append(h(s, "TopLeft"), ri = h(s, "TopCenter"), h(s, "TopRight")), h(s, !1, "clear:left").append(ui = h(s, "MiddleLeft"), p, fi = h(s, "MiddleRight")), h(s, !1, "clear:left").append(h(s, "BottomLeft"), ei = h(s, "BottomCenter"), h(s, "BottomRight"))).find("div div").css({
            float: "left"
        }), ot = h(s, !1, "position:absolute; width:9999px; visibility:hidden; display:none; max-width:none;"), hi = st.add(ht).add(si).add(et));
        t.body && !u.parent().length && n(t.body).append(d, u.append(rt, ot))
    }

    function tr() {
        function i(n) {
            n.which > 1 || n.shiftKey || n.altKey || n.metaKey || n.ctrlKey || (n.preventDefault(), gt(this))
        }
        if (u) {
            if (!li)
                if (li = !0, st.click(function() {
                        o.next()
                    }), ht.click(function() {
                        o.prev()
                    }), bt.click(function() {
                        o.close()
                    }), d.click(function() {
                        r.get("overlayClose") && o.close()
                    }), n(t).bind("keydown." + e, function(n) {
                        var t = n.keyCode;
                        it && r.get("escKey") && t === 27 && (n.preventDefault(), o.close());
                        it && r.get("arrowKey") && c[1] && !n.altKey && (t === 37 ? (n.preventDefault(), ht.click()) : t === 39 && (n.preventDefault(), st.click()))
                    }), n.isFunction(n.fn.on)) n(t).on("click." + e, "." + ft, i);
                else n("." + ft).live("click." + e, i);
            return !0
        }
        return !1
    }

    function ir() {
        var t, y, u = o.prep,
            p, d = ++ci,
            l;
        if (ct = !0, f = !1, ut(pt), ut(vt), r.get("onLoad"), r.h = r.get("height") ? a(r.get("height"), "y") - nt - b : r.get("innerHeight") && a(r.get("innerHeight"), "y"), r.w = r.get("width") ? a(r.get("width"), "x") - tt - k : r.get("innerWidth") && a(r.get("innerWidth"), "x"), r.mw = r.w, r.mh = r.h, r.get("maxWidth") && (r.mw = a(r.get("maxWidth"), "x") - tt - k, r.mw = r.w && r.w < r.mw ? r.w : r.mw), r.get("maxHeight") && (r.mh = a(r.get("maxHeight"), "y") - nt - b, r.mh = r.h && r.h < r.mh ? r.h : r.mh), t = r.get("href"), vi = setTimeout(function() {
                wt.show()
            }, 100), r.get("inline")) {
            l = n(t).eq(0);
            p = n("<div>").hide().insertBefore(l);
            w.one(pt, function() {
                p.replaceWith(l)
            });
            u(l)
        } else if (r.get("iframe")) u(" ");
        else if (r.get("html")) u(r.get("html"));
        else if (pi(r, t)) {
            t = wi(r, t);
            f = r.get("createImg");
            n(f).addClass(e + "Photo").bind("error." + e, function() {
                u(h(s, "Error").html(r.get("imgError")))
            }).one("load", function() {
                d === ci && setTimeout(function() {
                    var t;
                    r.get("retinaImage") && i.devicePixelRatio > 1 && (f.height = f.height / i.devicePixelRatio, f.width = f.width / i.devicePixelRatio);
                    r.get("scalePhotos") && (y = function() {
                        f.height -= f.height * t;
                        f.width -= f.width * t
                    }, r.mw && f.width > r.mw && (t = (f.width - r.mw) / f.width, y()), r.mh && f.height > r.mh && (t = (f.height - r.mh) / f.height, y()));
                    r.h && (f.style.marginTop = Math.max(r.mh - f.height, 0) / 2 + "px");
                    c[1] && (r.get("loop") || c[v + 1]) && (f.style.cursor = "pointer", n(f).bind("click." + e, function() {
                        o.next()
                    }));
                    f.style.width = f.width + "px";
                    f.style.height = f.height + "px";
                    u(f)
                }, 1)
            });
            f.src = t
        } else t && ot.load(t, r.get("data"), function(t, i) {
            d === ci && u(i === "error" ? h(s, "Error").html(r.get("xhrError")) : n(this).contents())
        })
    }
    var ni = {
            html: !1,
            photo: !1,
            iframe: !1,
            inline: !1,
            transition: "elastic",
            speed: 300,
            fadeOut: 300,
            width: !1,
            initialWidth: "600",
            innerWidth: !1,
            maxWidth: !1,
            height: !1,
            initialHeight: "450",
            innerHeight: !1,
            maxHeight: !1,
            scalePhotos: !0,
            scrolling: !0,
            opacity: .9,
            preloading: !0,
            className: !1,
            overlayClose: !0,
            escKey: !0,
            arrowKey: !0,
            top: !1,
            bottom: !1,
            left: !1,
            right: !1,
            fixed: !1,
            data: undefined,
            closeButton: !0,
            fastIframe: !0,
            open: !1,
            reposition: !0,
            loop: !0,
            slideshow: !1,
            slideshowAuto: !0,
            slideshowSpeed: 2500,
            slideshowStart: "start slideshow",
            slideshowStop: "stop slideshow",
            photoRegex: /\.(gif|png|jp(e|g|eg)|bmp|ico|webp|jxr|svg)((#|\?).*)?$/i,
            retinaImage: !1,
            retinaUrl: !1,
            retinaSuffix: "@2x.$1",
            current: "image {current} of {total}",
            previous: "previous",
            next: "next",
            close: "close",
            xhrError: "This content failed to load.",
            imgError: "This image failed to load.",
            returnFocus: !0,
            trapFocus: !0,
            onOpen: !1,
            onLoad: !1,
            onComplete: !1,
            onCleanup: !1,
            onClosed: !1,
            rel: function() {
                return this.rel
            },
            href: function() {
                return n(this).attr("href")
            },
            title: function() {
                return this.title
            },
            createImg: function() {
                var t = new Image,
                    i = n(this).data("cbox-img-attrs");
                return typeof i == "object" && n.each(i, function(n, i) {
                    t[n] = i
                }), t
            },
            createIframe: function() {
                var i = t.createElement("iframe"),
                    r = n(this).data("cbox-iframe-attrs");
                return typeof r == "object" && n.each(r, function(n, t) {
                    i[n] = t
                }), "frameBorder" in i && (i.frameBorder = 0), "allowTransparency" in i && (i.allowTransparency = "true"), i.name = (new Date).getTime(), i.allowFullscreen = !0, i
            }
        },
        y = "colorbox",
        e = "cbox",
        ft = e + "Element",
        di = e + "_open",
        vt = e + "_load",
        yt = e + "_complete",
        ti = e + "_cleanup",
        ii = e + "_closed",
        pt = e + "_purge",
        d, u, rt, p, ri, ui, fi, ei, c, g, l, ot, wt, oi, si, et, st, ht, bt, hi, w = n("<a/>"),
        r, b, k, nt, tt, v, f, it, ct, lt, vi, o, s = "div",
        ci = 0,
        yi = {},
        li, nr = function() {
            function t() {
                clearTimeout(l)
            }

            function s() {
                (r.get("loop") || c[v + 1]) && (t(), l = setTimeout(o.next, r.get("slideshowSpeed")))
            }

            function a() {
                et.html(r.get("slideshowStop")).unbind(i).one(i, y);
                w.bind(yt, s).bind(vt, t);
                u.removeClass(n + "off").addClass(n + "on")
            }

            function y() {
                t();
                w.unbind(yt, s).unbind(vt, t);
                et.html(r.get("slideshowStart")).unbind(i).one(i, function() {
                    o.next();
                    a()
                });
                u.removeClass(n + "on").addClass(n + "off")
            }

            function h() {
                f = !1;
                et.hide();
                t();
                w.unbind(yt, s).unbind(vt, t);
                u.removeClass(n + "off " + n + "on")
            }
            var f, n = e + "Slideshow_",
                i = "click." + e,
                l;
            return function() {
                if (f) r.get("slideshow") || (w.unbind(ti, h), h());
                else if (r.get("slideshow") && c[1]) {
                    f = !0;
                    w.one(ti, h);
                    r.get("slideshowAuto") ? a() : y();
                    et.show()
                }
            }
        }();
    n[y] || (n(ki), o = n.fn[y] = n[y] = function(t, i) {
        var u, r = this;
        return (t = t || {}, n.isFunction(r) && (r = n("<a/>"), t.open = !0), !r[0]) ? r : (ki(), tr() && (i && (t.onComplete = i), r.each(function() {
            var i = n.data(this, y) || {};
            n.data(this, y, n.extend(i, t))
        }).addClass(ft), u = new kt(r[0], t), u.get("open") && gt(r[0])), r)
    }, o.position = function(t, i) {
        function w() {
            ri[0].style.width = ei[0].style.width = p[0].style.width = parseInt(u[0].style.width, 10) - k + "px";
            p[0].style.height = ui[0].style.height = fi[0].style.height = parseInt(u[0].style.height, 10) - b + "px"
        }
        var f, h = 0,
            c = 0,
            s = u.offset(),
            l, v, y;
        g.unbind("resize." + e);
        u.css({
            top: -9e4,
            left: -9e4
        });
        l = g.scrollTop();
        v = g.scrollLeft();
        r.get("fixed") ? (s.top -= l, s.left -= v, u.css({
            position: "fixed"
        })) : (h = l, c = v, u.css({
            position: "absolute"
        }));
        c += r.get("right") !== !1 ? Math.max(g.width() - r.w - tt - k - a(r.get("right"), "x"), 0) : r.get("left") !== !1 ? a(r.get("left"), "x") : Math.round(Math.max(g.width() - r.w - tt - k, 0) / 2);
        h += r.get("bottom") !== !1 ? Math.max(ai() - r.h - nt - b - a(r.get("bottom"), "y"), 0) : r.get("top") !== !1 ? a(r.get("top"), "y") : Math.round(Math.max(ai() - r.h - nt - b, 0) / 2);
        u.css({
            top: s.top,
            left: s.left,
            visibility: "visible"
        });
        rt[0].style.width = rt[0].style.height = "9999px";
        f = {
            width: r.w + tt + k,
            height: r.h + nt + b,
            top: h,
            left: c
        };
        t && (y = 0, n.each(f, function(n) {
            if (f[n] !== yi[n]) {
                y = t;
                return
            }
        }), t = y);
        yi = f;
        t || u.css(f);
        u.dequeue().animate(f, {
            duration: t || 0,
            complete: function() {
                w();
                ct = !1;
                rt[0].style.width = r.w + tt + k + "px";
                rt[0].style.height = r.h + nt + b + "px";
                r.get("reposition") && setTimeout(function() {
                    g.bind("resize." + e, o.position)
                }, 1);
                n.isFunction(i) && i()
            },
            step: w
        })
    }, o.resize = function(n) {
        var t;
        it && (n = n || {}, n.width && (r.w = a(n.width, "x") - tt - k), n.innerWidth && (r.w = a(n.innerWidth, "x")), l.css({
            width: r.w
        }), n.height && (r.h = a(n.height, "y") - nt - b), n.innerHeight && (r.h = a(n.innerHeight, "y")), n.innerHeight || n.height || (t = l.scrollTop(), l.css({
            height: "auto"
        }), r.h = l.height()), l.css({
            height: r.h
        }), t && l.scrollTop(t), o.position(r.get("transition") === "none" ? 0 : r.get("speed")))
    }, o.prep = function(i) {
        function k() {
            return r.w = r.w || l.width(), r.w = r.mw && r.mw < r.w ? r.mw : r.w, r.w
        }

        function d() {
            return r.h = r.h || l.height(), r.h = r.mh && r.mh < r.h ? r.mh : r.h, r.h
        }
        if (it) {
            var a, b = r.get("transition") === "none" ? 0 : r.get("speed");
            l.remove();
            l = h(s, "LoadedContent").append(i);
            l.hide().appendTo(ot.show()).css({
                width: k(),
                overflow: r.get("scrolling") ? "auto" : "hidden"
            }).css({
                height: d()
            }).prependTo(p);
            ot.hide();
            n(f).css({
                float: "none"
            });
            at(r.get("className"));
            a = function() {
                function s() {
                    n.support.opacity === !1 && u[0].style.removeAttribute("filter")
                }
                var f = c.length,
                    i, o;
                if (it) {
                    if (o = function() {
                            clearTimeout(vi);
                            wt.hide();
                            ut(yt);
                            r.get("onComplete")
                        }, oi.html(r.get("title")).show(), l.show(), f > 1 ? (typeof r.get("current") == "string" && si.html(r.get("current").replace("{current}", v + 1).replace("{total}", f)).show(), st[r.get("loop") || v < f - 1 ? "show" : "hide"]().html(r.get("next")), ht[r.get("loop") || v ? "show" : "hide"]().html(r.get("previous")), nr(), r.get("preloading") && n.each([dt(-1), dt(1)], function() {
                            var u, f = c[this],
                                r = new kt(f, n.data(f, y)),
                                i = r.get("href");
                            i && pi(r, i) && (i = wi(r, i), u = t.createElement("img"), u.src = i)
                        })) : hi.hide(), r.get("iframe")) {
                        i = r.get("createIframe");
                        r.get("scrolling") || (i.scrolling = "no");
                        n(i).attr({
                            src: r.get("href"),
                            "class": e + "Iframe"
                        }).one("load", o).appendTo(l);
                        w.one(pt, function() {
                            i.src = "//about:blank"
                        });
                        r.get("fastIframe") && n(i).trigger("load")
                    } else o();
                    r.get("transition") === "fade" ? u.fadeTo(b, 1, s) : s()
                }
            };
            r.get("transition") === "fade" ? u.fadeTo(b, 0, function() {
                o.position(0, a)
            }) : o.position(b, a)
        }
    }, o.next = function() {
        !ct && c[1] && (r.get("loop") || c[v + 1]) && (v = dt(1), gt(c[v]))
    }, o.prev = function() {
        !ct && c[1] && (r.get("loop") || v) && (v = dt(-1), gt(c[v]))
    }, o.close = function() {
        it && !lt && (lt = !0, it = !1, ut(ti), r.get("onCleanup"), g.unbind("." + e), d.fadeTo(r.get("fadeOut") || 0, 0), u.stop().fadeTo(r.get("fadeOut") || 0, 0, function() {
            u.hide();
            d.hide();
            ut(pt);
            l.remove();
            setTimeout(function() {
                lt = !1;
                ut(ii);
                r.get("onClosed")
            }, 1)
        }))
    }, o.remove = function() {
        u && (u.stop(), n[y].close(), u.stop(!1, !0).remove(), d.remove(), lt = !1, u = null, n("." + ft).removeData(y).removeClass(ft), n(t).unbind("click." + e).unbind("keydown." + e))
    }, o.element = function() {
        return n(r.el)
    }, o.settings = ni)
}(jQuery, document, window);

// $("[placeholder]").not('input[type="password"]').focus(function() {
//     var n = $(this);
//     n.val() == n.attr("placeholder") && (n.val(""), n.removeClass("placeholder"))
// }).blur(function() {
//     var n = $(this);
//     (n.val() == "" || n.val() == n.attr("placeholder")) && (n.addClass("placeholder"), n.val(n.attr("placeholder")))
// }).blur();
! function(n) {
    "function" == typeof define && define.amd ? define(["jquery"], n) : n("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto)
}(function(n) {
    var t, it, f, p, o, pt, s = "Close",
        wt = "BeforeClose",
        ti = "AfterClose",
        ii = "BeforeAppend",
        rt = "MarkupParse",
        ut = "Open",
        bt = "Change",
        ft = "mfp",
        u = "." + ft,
        w = "mfp-ready",
        kt = "mfp-removing",
        et = "mfp-prevent-close",
        b = function() {},
        ot = !!window.jQuery,
        h = n(window),
        r = function(n, i) {
            t.ev.on(ft + n + u, i)
        },
        l = function(t, i, r, u) {
            var f = document.createElement("div");
            return f.className = "mfp-" + t, r && (f.innerHTML = r), u ? i && i.appendChild(f) : (f = n(f), i && f.appendTo(i)), f
        },
        i = function(i, r) {
            t.ev.triggerHandler(ft + i, r);
            t.st.callbacks && (i = i.charAt(0).toLowerCase() + i.slice(1), t.st.callbacks[i] && t.st.callbacks[i].apply(t, n.isArray(r) ? r : [r]))
        },
        st = function(i) {
            return i === pt && t.currTemplate.closeBtn || (t.currTemplate.closeBtn = n(t.st.closeMarkup.replace("%title%", t.st.tClose)), pt = i), t.currTemplate.closeBtn
        },
        ht = function() {
            n.magnificPopup.instance || (t = new b, t.init(), n.magnificPopup.instance = t)
        },
        ri = function() {
            var n = document.createElement("p").style,
                t = ["ms", "O", "Moz", "Webkit"];
            if (void 0 !== n.transition) return !0;
            for (; t.length;)
                if (t.pop() + "Transition" in n) return !0;
            return !1
        },
        a, k, d, g, ct, e, gt, at, ni, nt, yt, tt;
    b.prototype = {
        constructor: b,
        init: function() {
            var i = navigator.appVersion;
            t.isLowIE = t.isIE8 = document.all && !document.addEventListener;
            t.isAndroid = /android/gi.test(i);
            t.isIOS = /iphone|ipad|ipod/gi.test(i);
            t.supportsTransition = ri();
            t.probablyMobile = t.isAndroid || t.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent);
            f = n(document);
            t.popupsCache = {}
        },
        open: function(e) {
            var s, c, p, b, a, k, v, d, y;
            if (e.isObj === !1) {
                for (t.items = e.items.toArray(), t.index = 0, p = e.items, s = 0; s < p.length; s++)
                    if (c = p[s], c.parsed && (c = c.el[0]), c === e.el[0]) {
                        t.index = s;
                        break
                    }
            } else t.items = n.isArray(e.items) ? e.items : [e.items], t.index = e.index || 0;
            if (t.isOpen) return void t.updateItemHTML();
            for (t.types = [], o = "", t.ev = e.mainEl && e.mainEl.length ? e.mainEl.eq(0) : f, e.key ? (t.popupsCache[e.key] || (t.popupsCache[e.key] = {}), t.currTemplate = t.popupsCache[e.key]) : t.currTemplate = {}, t.st = n.extend(!0, {}, n.magnificPopup.defaults, e), t.fixedContentPos = "auto" === t.st.fixedContentPos ? !t.probablyMobile : t.st.fixedContentPos, t.st.modal && (t.st.closeOnContentClick = !1, t.st.closeOnBgClick = !1, t.st.showCloseBtn = !1, t.st.enableEscapeKey = !1), t.bgOverlay || (t.bgOverlay = l("bg").on("click" + u, function() {
                    t.close()
                }), t.wrap = l("wrap").attr("tabindex", -1).on("click" + u, function(n) {
                    t._checkIfClose(n.target) && t.close()
                }), t.container = l("container", t.wrap)), t.contentContainer = l("content"), t.st.preloader && (t.preloader = l("preloader", t.container, t.st.tLoading)), b = n.magnificPopup.modules, s = 0; s < b.length; s++) a = b[s], a = a.charAt(0).toUpperCase() + a.slice(1), t["init" + a].call(t);
            return i("BeforeOpen"), t.st.showCloseBtn && (t.st.closeBtnInside ? (r(rt, function(n, t, i, r) {
                i.close_replaceWith = st(r.type)
            }), o += " mfp-close-btn-in") : t.wrap.append(st())), t.st.alignTop && (o += " mfp-align-top"), t.fixedContentPos ? t.wrap.css({
                overflow: t.st.overflowY,
                overflowX: "hidden",
                overflowY: t.st.overflowY
            }) : t.wrap.css({
                top: h.scrollTop(),
                position: "absolute"
            }), (t.st.fixedBgPos === !1 || "auto" === t.st.fixedBgPos && !t.fixedContentPos) && t.bgOverlay.css({
                height: f.height(),
                position: "absolute"
            }), t.st.enableEscapeKey && f.on("keyup" + u, function(n) {
                27 === n.keyCode && t.close()
            }), h.on("resize" + u, function() {
                t.updateSize()
            }), t.st.closeOnContentClick || (o += " mfp-auto-cursor"), o && t.wrap.addClass(o), k = t.wH = h.height(), v = {}, t.fixedContentPos && t._hasScrollBar(k) && (d = t._getScrollbarSize(), d && (v.marginRight = d)), t.fixedContentPos && (t.isIE7 ? n("body, html").css("overflow", "hidden") : v.overflow = "hidden"), y = t.st.mainClass, t.isIE7 && (y += " mfp-ie7"), y && t._addClassToMFP(y), t.updateItemHTML(), i("BuildControls"), n("html").css(v), t.bgOverlay.add(t.wrap).prependTo(t.st.prependTo || n(document.body)), t._lastFocusedEl = document.activeElement, setTimeout(function() {
                t.content ? (t._addClassToMFP(w), t._setFocus()) : t.bgOverlay.addClass(w);
                f.on("focusin" + u, t._onFocusIn)
            }, 16), t.isOpen = !0, t.updateSize(k), i(ut), e
        },
        close: function() {
            t.isOpen && (i(wt), t.isOpen = !1, t.st.removalDelay && !t.isLowIE && t.supportsTransition ? (t._addClassToMFP(kt), setTimeout(function() {
                t._close()
            }, t.st.removalDelay)) : t._close())
        },
        _close: function() {
            var r, e;
            i(s);
            r = kt + " " + w + " ";
            (t.bgOverlay.detach(), t.wrap.detach(), t.container.empty(), t.st.mainClass && (r += t.st.mainClass + " "), t._removeClassFromMFP(r), t.fixedContentPos) && (e = {
                marginRight: ""
            }, t.isIE7 ? n("body, html").css("overflow", "") : e.overflow = "", n("html").css(e));
            f.off("keyup" + u + " focusin" + u);
            t.ev.off(u);
            t.wrap.attr("class", "mfp-wrap").removeAttr("style");
            t.bgOverlay.attr("class", "mfp-bg");
            t.container.attr("class", "mfp-container");
            !t.st.showCloseBtn || t.st.closeBtnInside && t.currTemplate[t.currItem.type] !== !0 || t.currTemplate.closeBtn && t.currTemplate.closeBtn.detach();
            t.st.autoFocusLast && t._lastFocusedEl && n(t._lastFocusedEl).focus();
            t.currItem = null;
            t.content = null;
            t.currTemplate = null;
            t.prevHeight = 0;
            i(ti)
        },
        updateSize: function(n) {
            if (t.isIOS) {
                var u = document.documentElement.clientWidth / window.innerWidth,
                    r = window.innerHeight * u;
                t.wrap.css("height", r);
                t.wH = r
            } else t.wH = n || h.height();
            t.fixedContentPos || t.wrap.css("height", t.wH);
            i("Resize")
        },
        updateItemHTML: function() {
            var u = t.items[t.index],
                r, f, e;
            t.contentContainer.detach();
            t.content && t.content.detach();
            u.parsed || (u = t.parseEl(t.index));
            r = u.type;
            (i("BeforeChange", [t.currItem ? t.currItem.type : "", r]), t.currItem = u, t.currTemplate[r]) || (f = t.st[r] ? t.st[r].markup : !1, i("FirstMarkupParse", f), t.currTemplate[r] = f ? n(f) : !0);
            p && p !== u.type && t.container.removeClass("mfp-" + p + "-holder");
            e = t["get" + r.charAt(0).toUpperCase() + r.slice(1)](u, t.currTemplate[r]);
            t.appendContent(e, r);
            u.preloaded = !0;
            i(bt, u);
            p = u.type;
            t.container.prepend(t.contentContainer);
            i("AfterChange")
        },
        appendContent: function(n, r) {
            t.content = n;
            n ? t.st.showCloseBtn && t.st.closeBtnInside && t.currTemplate[r] === !0 ? t.content.find(".mfp-close").length || t.content.append(st()) : t.content = n : t.content = "";
            i(ii);
            t.container.addClass("mfp-" + r + "-holder");
            t.contentContainer.append(t.content)
        },
        parseEl: function(r) {
            var o, u = t.items[r],
                e, f;
            if (u.tagName ? u = {
                    el: n(u)
                } : (o = u.type, u = {
                    data: u,
                    src: u.src
                }), u.el) {
                for (e = t.types, f = 0; f < e.length; f++)
                    if (u.el.hasClass("mfp-" + e[f])) {
                        o = e[f];
                        break
                    }
                u.src = u.el.attr("data-mfp-src");
                u.src || (u.src = u.el.attr("href"))
            }
            return u.type = o || t.st.type || "inline", u.index = r, u.parsed = !0, t.items[r] = u, i("ElementParse", u), t.items[r]
        },
        addGroup: function(n, i) {
            var u = function(r) {
                    r.mfpEl = this;
                    t._openClick(r, n, i)
                },
                r;
            i || (i = {});
            r = "click.magnificPopup";
            i.mainEl = n;
            i.items ? (i.isObj = !0, n.off(r).on(r, u)) : (i.isObj = !1, i.delegate ? n.off(r).on(r, i.delegate, u) : (i.items = n, n.off(r).on(r, u)))
        },
        _openClick: function(i, r, u) {
            var e = void 0 !== u.midClick ? u.midClick : n.magnificPopup.defaults.midClick,
                f;
            if (e || !(2 === i.which || i.ctrlKey || i.metaKey || i.altKey || i.shiftKey)) {
                if (f = void 0 !== u.disableOn ? u.disableOn : n.magnificPopup.defaults.disableOn, f)
                    if (n.isFunction(f)) {
                        if (!f.call(t)) return !0
                    } else if (h.width() < f) return !0;
                i.type && (i.preventDefault(), t.isOpen && i.stopPropagation());
                u.el = n(i.mfpEl);
                u.delegate && (u.items = r.find(u.delegate));
                t.open(u)
            }
        },
        updateStatus: function(n, r) {
            if (t.preloader) {
                it !== n && t.container.removeClass("mfp-s-" + it);
                r || "loading" !== n || (r = t.st.tLoading);
                var u = {
                    status: n,
                    text: r
                };
                i("UpdateStatus", u);
                n = u.status;
                r = u.text;
                t.preloader.html(r);
                t.preloader.find("a").on("click", function(n) {
                    n.stopImmediatePropagation()
                });
                t.container.addClass("mfp-s-" + n);
                it = n
            }
        },
        _checkIfClose: function(i) {
            if (!n(i).hasClass(et)) {
                var r = t.st.closeOnContentClick,
                    u = t.st.closeOnBgClick;
                if (r && u || !t.content || n(i).hasClass("mfp-close") || t.preloader && i === t.preloader[0]) return !0;
                if (i === t.content[0] || n.contains(t.content[0], i)) {
                    if (r) return !0
                } else if (u && n.contains(document, i)) return !0;
                return !1
            }
        },
        _addClassToMFP: function(n) {
            t.bgOverlay.addClass(n);
            t.wrap.addClass(n)
        },
        _removeClassFromMFP: function(n) {
            this.bgOverlay.removeClass(n);
            t.wrap.removeClass(n)
        },
        _hasScrollBar: function(n) {
            return (t.isIE7 ? f.height() : document.body.scrollHeight) > (n || h.height())
        },
        _setFocus: function() {
            (t.st.focus ? t.content.find(t.st.focus).eq(0) : t.wrap).focus()
        },
        _onFocusIn: function(i) {
            if (i.target !== t.wrap[0] && !n.contains(t.wrap[0], i.target)) return (t._setFocus(), !1)
        },
        _parseMarkup: function(t, r, f) {
            var e;
            f.data && (r = n.extend(f.data, r));
            i(rt, [t, r, f]);
            n.each(r, function(i, r) {
                var f, o;
                if (void 0 === r || r === !1) return !0;
                (e = i.split("_"), e.length > 1) ? (f = t.find(u + "-" + e[0]), f.length > 0 && (o = e[1], "replaceWith" === o ? f[0] !== r[0] && f.replaceWith(r) : "img" === o ? f.is("img") ? f.attr("src", r) : f.replaceWith(n("<img>").attr("src", r).attr("class", f.attr("class"))) : f.attr(e[1], r))) : t.find(u + "-" + i).html(r)
            })
        },
        _getScrollbarSize: function() {
            if (void 0 === t.scrollbarSize) {
                var n = document.createElement("div");
                n.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;";
                document.body.appendChild(n);
                t.scrollbarSize = n.offsetWidth - n.clientWidth;
                document.body.removeChild(n)
            }
            return t.scrollbarSize
        }
    };
    n.magnificPopup = {
        instance: null,
        proto: b.prototype,
        modules: [],
        open: function(t, i) {
            return ht(), t = t ? n.extend(!0, {}, t) : {}, t.isObj = !0, t.index = i || 0, this.instance.open(t)
        },
        close: function() {
            return n.magnificPopup.instance && n.magnificPopup.instance.close()
        },
        registerModule: function(t, i) {
            i.options && (n.magnificPopup.defaults[t] = i.options);
            n.extend(this.proto, i.proto);
            this.modules.push(t)
        },
        defaults: {
            disableOn: 0,
            key: null,
            midClick: !1,
            mainClass: "",
            preloader: !0,
            focus: "",
            closeOnContentClick: !1,
            closeOnBgClick: !0,
            closeBtnInside: !0,
            showCloseBtn: !0,
            enableEscapeKey: !0,
            modal: !1,
            alignTop: !1,
            removalDelay: 0,
            prependTo: null,
            fixedContentPos: "auto",
            fixedBgPos: "auto",
            overflowY: "auto",
            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;<\/button>',
            tClose: "Close (Esc)",
            tLoading: "Loading...",
            autoFocusLast: !0
        }
    };
    n.fn.magnificPopup = function(i) {
        var r, u, f, e;
        return ht(), r = n(this), "string" == typeof i ? "open" === i ? (f = ot ? r.data("magnificPopup") : r[0].magnificPopup, e = parseInt(arguments[1], 10) || 0, f.items ? u = f.items[e] : (u = r, f.delegate && (u = u.find(f.delegate)), u = u.eq(e)), t._openClick({
            mfpEl: u
        }, r, f)) : t.isOpen && t[i].apply(t, Array.prototype.slice.call(arguments, 1)) : (i = n.extend(!0, {}, i), ot ? r.data("magnificPopup", i) : r[0].magnificPopup = i, t.addGroup(r, i)), r
    };
    g = "inline";
    ct = function() {
        d && (k.after(d.addClass(a)).detach(), d = null)
    };
    n.magnificPopup.registerModule(g, {
        options: {
            hiddenClass: "hide",
            markup: "",
            tNotFound: "Content not found"
        },
        proto: {
            initInline: function() {
                t.types.push(g);
                r(s + "." + g, function() {
                    ct()
                })
            },
            getInline: function(i, r) {
                var f, u, e;
                return (ct(), i.src) ? (f = t.st.inline, u = n(i.src), u.length ? (e = u[0].parentNode, e && e.tagName && (k || (a = f.hiddenClass, k = l(a), a = "mfp-" + a), d = u.after(k).detach().removeClass(a)), t.updateStatus("ready")) : (t.updateStatus("error", f.tNotFound), u = n("<div>")), i.inlineElement = u, u) : (t.updateStatus("ready"), t._parseMarkup(r, {}, i), r)
            }
        }
    });
    var v, y = "ajax",
        lt = function() {
            v && n(document.body).removeClass(v)
        },
        dt = function() {
            lt();
            t.req && t.req.abort()
        };
    n.magnificPopup.registerModule(y, {
        options: {
            settings: null,
            cursor: "mfp-ajax-cur",
            tError: '<a href="%url%">The content<\/a> could not be loaded.'
        },
        proto: {
            initAjax: function() {
                t.types.push(y);
                v = t.st.ajax.cursor;
                r(s + "." + y, dt);
                r("BeforeChange." + y, dt)
            },
            getAjax: function(r) {
                v && n(document.body).addClass(v);
                t.updateStatus("loading");
                var u = n.extend({
                    url: r.src,
                    success: function(u, f, e) {
                        var o = {
                            data: u,
                            xhr: e
                        };
                        i("ParseAjax", o);
                        t.appendContent(n(o.data), y);
                        r.finished = !0;
                        lt();
                        t._setFocus();
                        setTimeout(function() {
                            t.wrap.addClass(w)
                        }, 16);
                        t.updateStatus("ready");
                        i("AjaxContentAdded")
                    },
                    error: function() {
                        lt();
                        r.finished = r.loadError = !0;
                        t.updateStatus("error", t.st.ajax.tError.replace("%url%", r.src))
                    }
                }, t.st.ajax.settings);
                return t.req = n.ajax(u), ""
            }
        }
    });
    gt = function(i) {
        if (i.data && void 0 !== i.data.title) return i.data.title;
        var r = t.st.image.titleSrc;
        if (r) {
            if (n.isFunction(r)) return r.call(t, i);
            if (i.el) return i.el.attr(r) || ""
        }
        return ""
    };
    n.magnificPopup.registerModule("image", {
        options: {
            markup: '<div class="mfp-figure"><div class="mfp-close"><\/div><figure><div class="mfp-img"><\/div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"><\/div><div class="mfp-counter"><\/div><\/div><\/figcaption><\/figure><\/div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image<\/a> could not be loaded.'
        },
        proto: {
            initImage: function() {
                var i = t.st.image,
                    f = ".image";
                t.types.push("image");
                r(ut + f, function() {
                    "image" === t.currItem.type && i.cursor && n(document.body).addClass(i.cursor)
                });
                r(s + f, function() {
                    i.cursor && n(document.body).removeClass(i.cursor);
                    h.off("resize" + u)
                });
                r("Resize" + f, t.resizeImage);
                t.isLowIE && r("AfterChange", t.resizeImage)
            },
            resizeImage: function() {
                var n = t.currItem,
                    i;
                n && n.img && t.st.image.verticalFit && (i = 0, t.isLowIE && (i = parseInt(n.img.css("padding-top"), 10) + parseInt(n.img.css("padding-bottom"), 10)), n.img.css("max-height", t.wH - i))
            },
            _onImageHasSize: function(n) {
                n.img && (n.hasSize = !0, e && clearInterval(e), n.isCheckingImgSize = !1, i("ImageHasSize", n), n.imgHidden && (t.content && t.content.removeClass("mfp-loading"), n.imgHidden = !1))
            },
            findImageSize: function(n) {
                var i = 0,
                    u = n.img[0],
                    r = function(f) {
                        e && clearInterval(e);
                        e = setInterval(function() {
                            return u.naturalWidth > 0 ? void t._onImageHasSize(n) : (i > 200 && clearInterval(e), i++, void(3 === i ? r(10) : 40 === i ? r(50) : 100 === i && r(500)))
                        }, f)
                    };
                r(1)
            },
            getImage: function(r, u) {
                var o = 0,
                    s = function() {
                        r && (r.img[0].complete ? (r.img.off(".mfploader"), r === t.currItem && (t._onImageHasSize(r), t.updateStatus("ready")), r.hasSize = !0, r.loaded = !0, i("ImageLoadComplete")) : (o++, 200 > o ? setTimeout(s, 100) : h()))
                    },
                    h = function() {
                        r && (r.img.off(".mfploader"), r === t.currItem && (t._onImageHasSize(r), t.updateStatus("error", c.tError.replace("%url%", r.src))), r.hasSize = !0, r.loaded = !0, r.loadError = !0)
                    },
                    c = t.st.image,
                    l = u.find(".mfp-img"),
                    f;
                return l.length && (f = document.createElement("img"), f.className = "mfp-img", r.el && r.el.find("img").length && (f.alt = r.el.find("img").attr("alt")), r.img = n(f).on("load.mfploader", s).on("error.mfploader", h), f.src = r.src, l.is("img") && (r.img = r.img.clone()), f = r.img[0], f.naturalWidth > 0 ? r.hasSize = !0 : f.width || (r.hasSize = !1)), t._parseMarkup(u, {
                    title: gt(r),
                    img_replaceWith: r.img
                }, r), t.resizeImage(), r.hasSize ? (e && clearInterval(e), r.loadError ? (u.addClass("mfp-loading"), t.updateStatus("error", c.tError.replace("%url%", r.src))) : (u.removeClass("mfp-loading"), t.updateStatus("ready")), u) : (t.updateStatus("loading"), r.loading = !0, r.hasSize || (r.imgHidden = !0, u.addClass("mfp-loading"), t.findImageSize(r)), u)
            }
        }
    });
    ni = function() {
        return void 0 === at && (at = void 0 !== document.createElement("p").style.MozTransform), at
    };
    n.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function(n) {
                return n.is("img") ? n : n.find("img")
            }
        },
        proto: {
            initZoom: function() {
                var u, f = t.st.zoom,
                    o = ".zoom";
                if (f.enabled && t.supportsTransition) {
                    var e, n, c = f.duration,
                        l = function(n) {
                            var r = n.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                u = "all " + f.duration / 1e3 + "s " + f.easing,
                                t = {
                                    position: "fixed",
                                    zIndex: 9999,
                                    left: 0,
                                    top: 0,
                                    "-webkit-backface-visibility": "hidden"
                                },
                                i = "transition";
                            return t["-webkit-" + i] = t["-moz-" + i] = t["-o-" + i] = t[i] = u, r.css(t), r
                        },
                        h = function() {
                            t.content.css("visibility", "visible")
                        };
                    r("BuildControls" + o, function() {
                        if (t._allowZoom()) {
                            if (clearTimeout(e), t.content.css("visibility", "hidden"), u = t._getItemToZoom(), !u) return void h();
                            n = l(u);
                            n.css(t._getOffset());
                            t.wrap.append(n);
                            e = setTimeout(function() {
                                n.css(t._getOffset(!0));
                                e = setTimeout(function() {
                                    h();
                                    setTimeout(function() {
                                        n.remove();
                                        u = n = null;
                                        i("ZoomAnimationEnded")
                                    }, 16)
                                }, c)
                            }, 16)
                        }
                    });
                    r(wt + o, function() {
                        if (t._allowZoom()) {
                            if (clearTimeout(e), t.st.removalDelay = c, !u) {
                                if (u = t._getItemToZoom(), !u) return;
                                n = l(u)
                            }
                            n.css(t._getOffset(!0));
                            t.wrap.append(n);
                            t.content.css("visibility", "hidden");
                            setTimeout(function() {
                                n.css(t._getOffset())
                            }, 16)
                        }
                    });
                    r(s + o, function() {
                        t._allowZoom() && (h(), n && n.remove(), u = null)
                    })
                }
            },
            _allowZoom: function() {
                return "image" === t.currItem.type
            },
            _getItemToZoom: function() {
                return t.currItem.hasSize ? t.currItem.img : !1
            },
            _getOffset: function(i) {
                var r, u;
                r = i ? t.currItem.img : t.st.zoom.opener(t.currItem.el || t.currItem);
                var f = r.offset(),
                    e = parseInt(r.css("padding-top"), 10),
                    o = parseInt(r.css("padding-bottom"), 10);
                return f.top -= n(window).scrollTop() - e, u = {
                    width: r.width(),
                    height: (ot ? r.innerHeight() : r[0].offsetHeight) - o - e
                }, ni() ? u["-moz-transform"] = u.transform = "translate(" + f.left + "px," + f.top + "px)" : (u.left = f.left, u.top = f.top), u
            }
        }
    });
    var c = "iframe",
        ui = "//about:blank",
        vt = function(n) {
            if (t.currTemplate[c]) {
                var i = t.currTemplate[c].find("iframe");
                i.length && (n || (i[0].src = ui), t.isIE8 && i.css("display", n ? "block" : "none"))
            }
        };
    n.magnificPopup.registerModule(c, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"><\/div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen><\/iframe><\/div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: {
                    index: "youtube.com",
                    id: "v=",
                    src: "//www.youtube.com/embed/%id%?autoplay=1"
                },
                vimeo: {
                    index: "vimeo.com/",
                    id: "/",
                    src: "//player.vimeo.com/video/%id%?autoplay=1"
                },
                gmaps: {
                    index: "//maps.google.",
                    src: "%id%&output=embed"
                }
            }
        },
        proto: {
            initIframe: function() {
                t.types.push(c);
                r("BeforeChange", function(n, t, i) {
                    t !== i && (t === c ? vt() : i === c && vt(!0))
                });
                r(s + "." + c, function() {
                    vt()
                })
            },
            getIframe: function(i, r) {
                var u = i.src,
                    f = t.st.iframe,
                    e;
                return n.each(f.patterns, function() {
                    if (u.indexOf(this.index) > -1) return (this.id && (u = "string" == typeof this.id ? u.substr(u.lastIndexOf(this.id) + this.id.length, u.length) : this.id.call(this, u)), u = this.src.replace("%id%", u), !1)
                }), e = {}, f.srcAction && (e[f.srcAction] = u), t._parseMarkup(r, e, i), t.updateStatus("ready"), r
            }
        }
    });
    nt = function(n) {
        var i = t.items.length;
        return n > i - 1 ? n - i : 0 > n ? i + n : n
    };
    yt = function(n, t, i) {
        return n.replace(/%curr%/gi, t + 1).replace(/%total%/gi, i)
    };
    n.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><\/button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%"
        },
        proto: {
            initGallery: function() {
                var u = t.st.gallery,
                    i = ".mfp-gallery";
                return t.direction = !0, u && u.enabled ? (o += " mfp-gallery", r(ut + i, function() {
                    u.navigateByImgClick && t.wrap.on("click" + i, ".mfp-img", function() {
                        if (t.items.length > 1) return (t.next(), !1)
                    });
                    f.on("keydown" + i, function(n) {
                        37 === n.keyCode ? t.prev() : 39 === n.keyCode && t.next()
                    })
                }), r("UpdateStatus" + i, function(n, i) {
                    i.text && (i.text = yt(i.text, t.currItem.index, t.items.length))
                }), r(rt + i, function(n, i, r, f) {
                    var e = t.items.length;
                    r.counter = e > 1 ? yt(u.tCounter, f.index, e) : ""
                }), r("BuildControls" + i, function() {
                    if (t.items.length > 1 && u.arrows && !t.arrowLeft) {
                        var i = u.arrowMarkup,
                            r = t.arrowLeft = n(i.replace(/%title%/gi, u.tPrev).replace(/%dir%/gi, "left")).addClass(et),
                            f = t.arrowRight = n(i.replace(/%title%/gi, u.tNext).replace(/%dir%/gi, "right")).addClass(et);
                        r.click(function() {
                            t.prev()
                        });
                        f.click(function() {
                            t.next()
                        });
                        t.container.append(r.add(f))
                    }
                }), r(bt + i, function() {
                    t._preloadTimeout && clearTimeout(t._preloadTimeout);
                    t._preloadTimeout = setTimeout(function() {
                        t.preloadNearbyImages();
                        t._preloadTimeout = null
                    }, 16)
                }), void r(s + i, function() {
                    f.off(i);
                    t.wrap.off("click" + i);
                    t.arrowRight = t.arrowLeft = null
                })) : !1
            },
            next: function() {
                t.direction = !0;
                t.index = nt(t.index + 1);
                t.updateItemHTML()
            },
            prev: function() {
                t.direction = !1;
                t.index = nt(t.index - 1);
                t.updateItemHTML()
            },
            goTo: function(n) {
                t.direction = n >= t.index;
                t.index = n;
                t.updateItemHTML()
            },
            preloadNearbyImages: function() {
                for (var i = t.st.gallery.preload, r = Math.min(i[0], t.items.length), u = Math.min(i[1], t.items.length), n = 1; n <= (t.direction ? u : r); n++) t._preloadItem(t.index + n);
                for (n = 1; n <= (t.direction ? r : u); n++) t._preloadItem(t.index - n)
            },
            _preloadItem: function(r) {
                if (r = nt(r), !t.items[r].preloaded) {
                    var u = t.items[r];
                    u.parsed || (u = t.parseEl(r));
                    i("LazyLoad", u);
                    "image" === u.type && (u.img = n('<img class="mfp-img" />').on("load.mfploader", function() {
                        u.hasSize = !0
                    }).on("error.mfploader", function() {
                        u.hasSize = !0;
                        u.loadError = !0;
                        i("LazyLoadError", u)
                    }).attr("src", u.src));
                    u.preloaded = !0
                }
            }
        }
    });
    tt = "retina";
    n.magnificPopup.registerModule(tt, {
        options: {
            replaceSrc: function(n) {
                return n.src.replace(/\.\w+$/, function(n) {
                    return "@2x" + n
                })
            },
            ratio: 1
        },
        proto: {
            initRetina: function() {
                if (window.devicePixelRatio > 1) {
                    var i = t.st.retina,
                        n = i.ratio;
                    n = isNaN(n) ? n() : n;
                    n > 1 && (r("ImageHasSize." + tt, function(t, i) {
                        i.img.css({
                            "max-width": i.img[0].naturalWidth / n,
                            width: "100%"
                        })
                    }), r("ElementParse." + tt, function(t, r) {
                        r.src = i.replaceSrc(r, n)
                    }))
                }
            }
        }
    });
    ht()
});
// QueryString = function() {
//     for (var n, u, t = {}, f = window.location.search.substring(1), r = f.split("&"), i = 0; i < r.length; i++) n = r[i].split("="), typeof t[n[0]] == "undefined" ? t[n[0]] = n[1] : typeof t[n[0]] == "string" ? (u = [t[n[0]], n[1]], t[n[0]] = u) : t[n[0]].push(n[1]);
//     return t
// }();
// $.fn.pVal = function() {
//     var n = $(this),
//         t = n.eq(0).val();
//     return t == n.attr("placeholder") ? "" : t
// };
$(document).ready(function() {
    var i = !(window.mozInnerScreenX == null),
        t, n;
    i && $("body").addClass("ffstyle");
    t = navigator.userAgent.indexOf("Chrome") > -1;
    n = navigator.userAgent.indexOf("Safari") > -1;
    t && n && (n = !1);
    n && $("body").addClass("safari")
});
$(".video-modal").on("hide.bs.modal", function() {
    jQuery(".video-modal-iframe").each(function() {
        jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*")
    })
});
$(".video-modal").on("show.bs.modal", function() {
    jQuery("#main-video")[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', "*")
})