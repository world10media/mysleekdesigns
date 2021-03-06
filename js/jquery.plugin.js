!(function (a, b, c, d) {
  function o(b, c) {
    (this.element = b),
      (this.options = a.extend({}, f, c)),
      (this._defaults = f),
      (this._name = e),
      this.init();
  }
  var e = "stellar",
    f = {
      scrollProperty: "scroll",
      positionProperty: "position",
      horizontalScrolling: !0,
      verticalScrolling: !0,
      horizontalOffset: 0,
      verticalOffset: 0,
      responsive: !1,
      parallaxBackgrounds: !0,
      parallaxElements: !0,
      hideDistantElements: !0,
      hideElement: function (a) {
        a.hide();
      },
      showElement: function (a) {
        a.show();
      },
    },
    g = {
      scroll: {
        getLeft: function (a) {
          return a.scrollLeft();
        },
        setLeft: function (a, b) {
          a.scrollLeft(b);
        },
        getTop: function (a) {
          return a.scrollTop();
        },
        setTop: function (a, b) {
          a.scrollTop(b);
        },
      },
      position: {
        getLeft: function (a) {
          return parseInt(a.css("left"), 10) * -1;
        },
        getTop: function (a) {
          return parseInt(a.css("top"), 10) * -1;
        },
      },
      margin: {
        getLeft: function (a) {
          return parseInt(a.css("margin-left"), 10) * -1;
        },
        getTop: function (a) {
          return parseInt(a.css("margin-top"), 10) * -1;
        },
      },
      transform: {
        getLeft: function (a) {
          var b = getComputedStyle(a[0])[j];
          return "none" !== b
            ? parseInt(b.match(/(-?[0-9]+)/g)[4], 10) * -1
            : 0;
        },
        getTop: function (a) {
          var b = getComputedStyle(a[0])[j];
          return "none" !== b
            ? parseInt(b.match(/(-?[0-9]+)/g)[5], 10) * -1
            : 0;
        },
      },
    },
    h = {
      position: {
        setLeft: function (a, b) {
          a.css("left", b);
        },
        setTop: function (a, b) {
          a.css("top", b);
        },
      },
      transform: {
        setPosition: function (a, b, c, d, e) {
          a[0].style[j] =
            "translate3d(" + (b - c) + "px, " + (d - e) + "px, 0)";
        },
      },
    },
    i = (function () {
      var e,
        b = /^(Moz|Webkit|Khtml|O|ms|Icab)(?=[A-Z])/,
        c = a("script")[0].style,
        d = "";
      for (e in c)
        if (b.test(e)) {
          d = e.match(b)[0];
          break;
        }
      return (
        "WebkitOpacity" in c && (d = "Webkit"),
        "KhtmlOpacity" in c && (d = "Khtml"),
        function (a) {
          return (
            d + (d.length > 0 ? a.charAt(0).toUpperCase() + a.slice(1) : a)
          );
        }
      );
    })(),
    j = i("transform"),
    k =
      a("<div />", { style: "background:#fff" }).css(
        "background-position-x"
      ) !== d,
    l = k
      ? function (a, b, c) {
          a.css({ "background-position-x": b, "background-position-y": c });
        }
      : function (a, b, c) {
          a.css("background-position", b + " " + c);
        },
    m = k
      ? function (a) {
          return [
            a.css("background-position-x"),
            a.css("background-position-y"),
          ];
        }
      : function (a) {
          return a.css("background-position").split(" ");
        },
    n =
      b.requestAnimationFrame ||
      b.webkitRequestAnimationFrame ||
      b.mozRequestAnimationFrame ||
      b.oRequestAnimationFrame ||
      b.msRequestAnimationFrame ||
      function (a) {
        setTimeout(a, 1e3 / 60);
      };
  (o.prototype = {
    init: function () {
      (this.options.name = e + "_" + Math.floor(1e9 * Math.random())),
        this._defineElements(),
        this._defineGetters(),
        this._defineSetters(),
        this._handleWindowLoadAndResize(),
        this._detectViewport(),
        this.refresh({ firstLoad: !0 }),
        "scroll" === this.options.scrollProperty
          ? this._handleScrollEvent()
          : this._startAnimationLoop();
    },
    _defineElements: function () {
      this.element === c.body && (this.element = b),
        (this.$scrollElement = a(this.element)),
        (this.$element = this.element === b ? a("body") : this.$scrollElement),
        (this.$viewportElement =
          this.options.viewportElement !== d
            ? a(this.options.viewportElement)
            : this.$scrollElement[0] === b ||
              "scroll" === this.options.scrollProperty
            ? this.$scrollElement
            : this.$scrollElement.parent());
    },
    _defineGetters: function () {
      var a = this,
        b = g[a.options.scrollProperty];
      (this._getScrollLeft = function () {
        return b.getLeft(a.$scrollElement);
      }),
        (this._getScrollTop = function () {
          return b.getTop(a.$scrollElement);
        });
    },
    _defineSetters: function () {
      var b = this,
        c = g[b.options.scrollProperty],
        d = h[b.options.positionProperty],
        e = c.setLeft,
        f = c.setTop;
      (this._setScrollLeft =
        "function" == typeof e
          ? function (a) {
              e(b.$scrollElement, a);
            }
          : a.noop),
        (this._setScrollTop =
          "function" == typeof f
            ? function (a) {
                f(b.$scrollElement, a);
              }
            : a.noop),
        (this._setPosition =
          d.setPosition ||
          function (a, c, e, f, g) {
            b.options.horizontalScrolling && d.setLeft(a, c, e),
              b.options.verticalScrolling && d.setTop(a, f, g);
          });
    },
    _handleWindowLoadAndResize: function () {
      var c = this,
        d = a(b);
      c.options.responsive &&
        d.bind("load." + this.name, function () {
          c.refresh();
        }),
        d.bind("resize." + this.name, function () {
          c._detectViewport(), c.options.responsive && c.refresh();
        });
    },
    refresh: function (c) {
      var d = this,
        e = d._getScrollLeft(),
        f = d._getScrollTop();
      (c && c.firstLoad) || this._reset(),
        this._setScrollLeft(0),
        this._setScrollTop(0),
        this._setOffsets(),
        this._findParticles(),
        this._findBackgrounds(),
        c &&
          c.firstLoad &&
          /WebKit/.test(navigator.userAgent) &&
          a(b).load(function () {
            var a = d._getScrollLeft(),
              b = d._getScrollTop();
            d._setScrollLeft(a + 1),
              d._setScrollTop(b + 1),
              d._setScrollLeft(a),
              d._setScrollTop(b);
          }),
        this._setScrollLeft(e),
        this._setScrollTop(f);
    },
    _detectViewport: function () {
      var a = this.$viewportElement.offset(),
        b = null !== a && a !== d;
      (this.viewportWidth = this.$viewportElement.width()),
        (this.viewportHeight = this.$viewportElement.height()),
        (this.viewportOffsetTop = b ? a.top : 0),
        (this.viewportOffsetLeft = b ? a.left : 0);
    },
    _findParticles: function () {
      var b = this;
      this._getScrollLeft(), this._getScrollTop();
      if (this.particles !== d)
        for (var f = this.particles.length - 1; f >= 0; f--)
          this.particles[f].$element.data("stellar-elementIsActive", d);
      (this.particles = []),
        this.options.parallaxElements &&
          this.$element.find("[data-stellar-ratio]").each(function (c) {
            var f,
              g,
              h,
              i,
              j,
              k,
              l,
              m,
              n,
              e = a(this),
              o = 0,
              p = 0,
              q = 0,
              r = 0;
            if (e.data("stellar-elementIsActive")) {
              if (e.data("stellar-elementIsActive") !== this) return;
            } else e.data("stellar-elementIsActive", this);
            b.options.showElement(e),
              e.data("stellar-startingLeft")
                ? (e.css("left", e.data("stellar-startingLeft")),
                  e.css("top", e.data("stellar-startingTop")))
                : (e.data("stellar-startingLeft", e.css("left")),
                  e.data("stellar-startingTop", e.css("top"))),
              (h = e.position().left),
              (i = e.position().top),
              (j =
                "auto" === e.css("margin-left")
                  ? 0
                  : parseInt(e.css("margin-left"), 10)),
              (k =
                "auto" === e.css("margin-top")
                  ? 0
                  : parseInt(e.css("margin-top"), 10)),
              (m = e.offset().left - j),
              (n = e.offset().top - k),
              e.parents().each(function () {
                var b = a(this);
                return b.data("stellar-offset-parent") === !0
                  ? ((o = q), (p = r), (l = b), !1)
                  : ((q += b.position().left), void (r += b.position().top));
              }),
              (f =
                e.data("stellar-horizontal-offset") !== d
                  ? e.data("stellar-horizontal-offset")
                  : l !== d && l.data("stellar-horizontal-offset") !== d
                  ? l.data("stellar-horizontal-offset")
                  : b.horizontalOffset),
              (g =
                e.data("stellar-vertical-offset") !== d
                  ? e.data("stellar-vertical-offset")
                  : l !== d && l.data("stellar-vertical-offset") !== d
                  ? l.data("stellar-vertical-offset")
                  : b.verticalOffset),
              b.particles.push({
                $element: e,
                $offsetParent: l,
                isFixed: "fixed" === e.css("position"),
                horizontalOffset: f,
                verticalOffset: g,
                startingPositionLeft: h,
                startingPositionTop: i,
                startingOffsetLeft: m,
                startingOffsetTop: n,
                parentOffsetLeft: o,
                parentOffsetTop: p,
                stellarRatio:
                  e.data("stellar-ratio") !== d ? e.data("stellar-ratio") : 1,
                width: e.outerWidth(!0),
                height: e.outerHeight(!0),
                isHidden: !1,
              });
          });
    },
    _findBackgrounds: function () {
      var f,
        b = this,
        c = this._getScrollLeft(),
        e = this._getScrollTop();
      (this.backgrounds = []),
        this.options.parallaxBackgrounds &&
          ((f = this.$element.find("[data-stellar-background-ratio]")),
          this.$element.data("stellar-background-ratio") &&
            (f = f.add(this.$element)),
          f.each(function () {
            var h,
              i,
              n,
              o,
              p,
              q,
              r,
              f = a(this),
              g = m(f),
              s = 0,
              t = 0,
              u = 0,
              v = 0;
            if (f.data("stellar-backgroundIsActive")) {
              if (f.data("stellar-backgroundIsActive") !== this) return;
            } else f.data("stellar-backgroundIsActive", this);
            f.data("stellar-backgroundStartingLeft")
              ? l(
                  f,
                  f.data("stellar-backgroundStartingLeft"),
                  f.data("stellar-backgroundStartingTop")
                )
              : (f.data("stellar-backgroundStartingLeft", g[0]),
                f.data("stellar-backgroundStartingTop", g[1])),
              (n =
                "auto" === f.css("margin-left")
                  ? 0
                  : parseInt(f.css("margin-left"), 10)),
              (o =
                "auto" === f.css("margin-top")
                  ? 0
                  : parseInt(f.css("margin-top"), 10)),
              (p = f.offset().left - n - c),
              (q = f.offset().top - o - e),
              f.parents().each(function () {
                var b = a(this);
                return b.data("stellar-offset-parent") === !0
                  ? ((s = u), (t = v), (r = b), !1)
                  : ((u += b.position().left), void (v += b.position().top));
              }),
              (h =
                f.data("stellar-horizontal-offset") !== d
                  ? f.data("stellar-horizontal-offset")
                  : r !== d && r.data("stellar-horizontal-offset") !== d
                  ? r.data("stellar-horizontal-offset")
                  : b.horizontalOffset),
              (i =
                f.data("stellar-vertical-offset") !== d
                  ? f.data("stellar-vertical-offset")
                  : r !== d && r.data("stellar-vertical-offset") !== d
                  ? r.data("stellar-vertical-offset")
                  : b.verticalOffset),
              b.backgrounds.push({
                $element: f,
                $offsetParent: r,
                isFixed: "fixed" === f.css("background-attachment"),
                horizontalOffset: h,
                verticalOffset: i,
                startingValueLeft: g[0],
                startingValueTop: g[1],
                startingBackgroundPositionLeft:
                  isNaN(parseInt(g[0], 10)) || -1 !== g[0].indexOf("%")
                    ? 0
                    : parseInt(g[0], 10),
                startingBackgroundPositionTop:
                  isNaN(parseInt(g[1], 10)) || -1 !== g[1].indexOf("%")
                    ? 0
                    : parseInt(g[1], 10),
                startingPositionLeft: f.position().left,
                startingPositionTop: f.position().top,
                startingOffsetLeft: p,
                startingOffsetTop: q,
                parentOffsetLeft: s,
                parentOffsetTop: t,
                stellarRatio:
                  f.data("stellar-background-ratio") === d
                    ? 1
                    : f.data("stellar-background-ratio"),
              });
          }));
    },
    _reset: function () {
      var a, b, c, d, e;
      for (e = this.particles.length - 1; e >= 0; e--)
        (a = this.particles[e]),
          (b = a.$element.data("stellar-startingLeft")),
          (c = a.$element.data("stellar-startingTop")),
          this._setPosition(a.$element, b, b, c, c),
          this.options.showElement(a.$element),
          a.$element
            .data("stellar-startingLeft", null)
            .data("stellar-elementIsActive", null)
            .data("stellar-backgroundIsActive", null);
      for (e = this.backgrounds.length - 1; e >= 0; e--)
        (d = this.backgrounds[e]),
          d.$element
            .data("stellar-backgroundStartingLeft", null)
            .data("stellar-backgroundStartingTop", null),
          l(d.$element, d.startingValueLeft, d.startingValueTop);
    },
    destroy: function () {
      this._reset(),
        this.$scrollElement
          .unbind("resize." + this.name)
          .unbind("scroll." + this.name),
        (this._animationLoop = a.noop),
        a(b)
          .unbind("load." + this.name)
          .unbind("resize." + this.name);
    },
    _setOffsets: function () {
      var c = this,
        d = a(b);
      d
        .unbind("resize.horizontal-" + this.name)
        .unbind("resize.vertical-" + this.name),
        "function" == typeof this.options.horizontalOffset
          ? ((this.horizontalOffset = this.options.horizontalOffset()),
            d.bind("resize.horizontal-" + this.name, function () {
              c.horizontalOffset = c.options.horizontalOffset();
            }))
          : (this.horizontalOffset = this.options.horizontalOffset),
        "function" == typeof this.options.verticalOffset
          ? ((this.verticalOffset = this.options.verticalOffset()),
            d.bind("resize.vertical-" + this.name, function () {
              c.verticalOffset = c.options.verticalOffset();
            }))
          : (this.verticalOffset = this.options.verticalOffset);
    },
    _repositionElements: function () {
      var e,
        f,
        g,
        h,
        i,
        m,
        n,
        o,
        p,
        q,
        a = this._getScrollLeft(),
        b = this._getScrollTop(),
        j = !0,
        k = !0;
      if (
        this.currentScrollLeft !== a ||
        this.currentScrollTop !== b ||
        this.currentWidth !== this.viewportWidth ||
        this.currentHeight !== this.viewportHeight
      ) {
        for (
          this.currentScrollLeft = a,
            this.currentScrollTop = b,
            this.currentWidth = this.viewportWidth,
            this.currentHeight = this.viewportHeight,
            q = this.particles.length - 1;
          q >= 0;
          q--
        )
          (e = this.particles[q]),
            (f = e.isFixed ? 1 : 0),
            this.options.horizontalScrolling
              ? ((m =
                  (a +
                    e.horizontalOffset +
                    this.viewportOffsetLeft +
                    e.startingPositionLeft -
                    e.startingOffsetLeft +
                    e.parentOffsetLeft) *
                    -(e.stellarRatio + f - 1) +
                  e.startingPositionLeft),
                (o = m - e.startingPositionLeft + e.startingOffsetLeft))
              : ((m = e.startingPositionLeft), (o = e.startingOffsetLeft)),
            this.options.verticalScrolling
              ? ((n =
                  (b +
                    e.verticalOffset +
                    this.viewportOffsetTop +
                    e.startingPositionTop -
                    e.startingOffsetTop +
                    e.parentOffsetTop) *
                    -(e.stellarRatio + f - 1) +
                  e.startingPositionTop),
                (p = n - e.startingPositionTop + e.startingOffsetTop))
              : ((n = e.startingPositionTop), (p = e.startingOffsetTop)),
            this.options.hideDistantElements &&
              ((k =
                !this.options.horizontalScrolling ||
                (o + e.width > (e.isFixed ? 0 : a) &&
                  o <
                    (e.isFixed ? 0 : a) +
                      this.viewportWidth +
                      this.viewportOffsetLeft)),
              (j =
                !this.options.verticalScrolling ||
                (p + e.height > (e.isFixed ? 0 : b) &&
                  p <
                    (e.isFixed ? 0 : b) +
                      this.viewportHeight +
                      this.viewportOffsetTop))),
            k && j
              ? (e.isHidden &&
                  (this.options.showElement(e.$element), (e.isHidden = !1)),
                this._setPosition(
                  e.$element,
                  m,
                  e.startingPositionLeft,
                  n,
                  e.startingPositionTop
                ))
              : e.isHidden ||
                (this.options.hideElement(e.$element), (e.isHidden = !0));
        for (q = this.backgrounds.length - 1; q >= 0; q--)
          (g = this.backgrounds[q]),
            (f = g.isFixed ? 0 : 1),
            (h = this.options.horizontalScrolling
              ? (a +
                  g.horizontalOffset -
                  this.viewportOffsetLeft -
                  g.startingOffsetLeft +
                  g.parentOffsetLeft -
                  g.startingBackgroundPositionLeft) *
                  (f - g.stellarRatio) +
                "px"
              : g.startingValueLeft),
            (i = this.options.verticalScrolling
              ? (b +
                  g.verticalOffset -
                  this.viewportOffsetTop -
                  g.startingOffsetTop +
                  g.parentOffsetTop -
                  g.startingBackgroundPositionTop) *
                  (f - g.stellarRatio) +
                "px"
              : g.startingValueTop),
            l(g.$element, h, i);
      }
    },
    _handleScrollEvent: function () {
      var a = this,
        b = !1,
        c = function () {
          a._repositionElements(), (b = !1);
        },
        d = function () {
          b || (n(c), (b = !0));
        };
      this.$scrollElement.bind("scroll." + this.name, d), d();
    },
    _startAnimationLoop: function () {
      var a = this;
      (this._animationLoop = function () {
        n(a._animationLoop), a._repositionElements();
      }),
        this._animationLoop();
    },
  }),
    (a.fn[e] = function (b) {
      var c = arguments;
      return b === d || "object" == typeof b
        ? this.each(function () {
            a.data(this, "plugin_" + e) ||
              a.data(this, "plugin_" + e, new o(this, b));
          })
        : "string" == typeof b && "_" !== b[0] && "init" !== b
        ? this.each(function () {
            var d = a.data(this, "plugin_" + e);
            d instanceof o &&
              "function" == typeof d[b] &&
              d[b].apply(d, Array.prototype.slice.call(c, 1)),
              "destroy" === b && a.data(this, "plugin_" + e, null);
          })
        : void 0;
    }),
    (a[e] = function (c) {
      var d = a(b);
      return d.stellar.apply(d, Array.prototype.slice.call(arguments, 0));
    }),
    (a[e].scrollProperty = g),
    (a[e].positionProperty = h),
    (b.Stellar = o);
})(jQuery, this, document);
