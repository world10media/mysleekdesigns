$(document).foundation();

 //show / hide medical conditions

function h_conditions() {
    document.getElementById('previous_conditons').style.display = "none";
}

function show() {
    document.getElementById('previous_conditons').style.display = "block";
}

/* owl carousel custom js */

$(document).ready(function(){
    $(".owl-carousel").owlCarousel();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
    autoplay:true,
    autoplayTimeout:3500,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive: {
        0: {
            items: 4,
            margin:20,
        },
        600: {
            items: 5,
            margin:30,
        },
        1000: {
            items: 7,
            margin:40,
        }
    }
});


/*
 jQuery Masked Input Plugin
 Copyright (c) 2007 - 2015 Josh Bush (digitalbush.com)
 Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license)
 Version: 1.4.1
 */

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});


/* input mask patterns */



jQuery(function ($) {
 //   $("#date").mask("99/99/9999", {autoclear: false});
    $("#phone").mask("(999) 999-9999", {autoclear: false});
    $("#cphone").mask("(999) 999-9999", {autoclear: false});
//    $("#phone").mask("(999) 999-9999", {placeholder: "(___)-___-____"});
    $("#tin").mask("99-9999999");
    $("#ssn").mask("999-99-9999");
    $("#hero-zip-submit-input").mask("99999", {autoclear: false}, {placeholder: "_____"})
    $("#zip").mask("99999", {placeholder: "_____"})
});






/**
 * jquery.mask.js
 * @version: v1.14.0
 * @author: Igor Escobar
 *
 * Created by Igor Escobar on 2012-03-10. Please report any bug at http://blog.igorescobar.com
 *
 * Copyright (c) 2012 Igor Escobar http://blog.igorescobar.com
 *
 * The MIT License (http://www.opensource.org/licenses/mit-license.php)
 *
 * Permission is hereby granted, free of charge, to any person
 * obtaining a copy of this software and associated documentation
 * files (the "Software"), to deal in the Software without
 * restriction, including without limitation the rights to use,
 * copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the
 * Software is furnished to do so, subject to the following
 * conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
 * OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 * WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
 * OTHER DEALINGS IN THE SOFTWARE.
 */

/* jshint laxbreak: true */
/* global define, jQuery, Zepto */

'use strict';

// UMD (Universal Module Definition) patterns for JavaScript modules that work everywhere.
// https://github.com/umdjs/umd/blob/master/jqueryPluginCommonjs.js
(function (factory) {

    if (typeof define === 'function' && define.amd) {
        define(['jquery'], factory);
    } else if (typeof exports === 'object') {
        module.exports = factory(require('jquery'));
    } else {
        factory(jQuery || Zepto);
    }

}(function ($) {

    var Mask = function (el, mask, options) {

        var p = {
            invalid: [],
            getCaret: function () {
                try {
                    var sel,
                        pos = 0,
                        ctrl = el.get(0),
                        dSel = document.selection,
                        cSelStart = ctrl.selectionStart;

                    // IE Support
                    if (dSel && navigator.appVersion.indexOf('MSIE 10') === -1) {
                        sel = dSel.createRange();
                        sel.moveStart('character', -p.val().length);
                        pos = sel.text.length;
                    }
                    // Firefox support
                    else if (cSelStart || cSelStart === '0') {
                        pos = cSelStart;
                    }

                    return pos;
                } catch (e) {}
            },
            setCaret: function(pos) {
                try {
                    if (el.is(':focus')) {
                        var range, ctrl = el.get(0);

                        // Firefox, WebKit, etc..
                        if (ctrl.setSelectionRange) {
                            ctrl.focus();
                            ctrl.setSelectionRange(pos, pos);
                        } else { // IE
                            range = ctrl.createTextRange();
                            range.collapse(true);
                            range.moveEnd('character', pos);
                            range.moveStart('character', pos);
                            range.select();
                        }
                    }
                } catch (e) {}
            },
            events: function() {
                el
                    .on('keydown.mask', function(e) {
                        el.data('mask-keycode', e.keyCode || e.which);
                    })
                    .on($.jMaskGlobals.useInput ? 'input.mask' : 'keyup.mask', p.behaviour)
                    .on('paste.mask drop.mask', function() {
                        setTimeout(function() {
                            el.keydown().keyup();
                        }, 100);
                    })
                    .on('change.mask', function(){
                        el.data('changed', true);
                    })
                    .on('blur.mask', function(){
                        if (oldValue !== p.val() && !el.data('changed')) {
                            el.trigger('change');
                        }
                        el.data('changed', false);
                    })
                    // it's very important that this callback remains in this position
                    // otherwhise oldValue it's going to work buggy
                    .on('blur.mask', function() {
                        oldValue = p.val();
                    })
                    // select all text on focus
                    .on('focus.mask', function (e) {
                        if (options.selectOnFocus === true) {
                            $(e.target).select();
                        }
                    })
                    // clear the value if it not complete the mask
                    .on('focusout.mask', function() {
                        if (options.clearIfNotMatch && !regexMask.test(p.val())) {
                            p.val('');
                        }
                    });
            },
            getRegexMask: function() {
                var maskChunks = [], translation, pattern, optional, recursive, oRecursive, r;

                for (var i = 0; i < mask.length; i++) {
                    translation = jMask.translation[mask.charAt(i)];

                    if (translation) {

                        pattern = translation.pattern.toString().replace(/.{1}$|^.{1}/g, '');
                        optional = translation.optional;
                        recursive = translation.recursive;

                        if (recursive) {
                            maskChunks.push(mask.charAt(i));
                            oRecursive = {digit: mask.charAt(i), pattern: pattern};
                        } else {
                            maskChunks.push(!optional && !recursive ? pattern : (pattern + '?'));
                        }

                    } else {
                        maskChunks.push(mask.charAt(i).replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'));
                    }
                }

                r = maskChunks.join('');

                if (oRecursive) {
                    r = r.replace(new RegExp('(' + oRecursive.digit + '(.*' + oRecursive.digit + ')?)'), '($1)?')
                        .replace(new RegExp(oRecursive.digit, 'g'), oRecursive.pattern);
                }

                return new RegExp(r);
            },
            destroyEvents: function() {
                el.off(['input', 'keydown', 'keyup', 'paste', 'drop', 'blur', 'focusout', ''].join('.mask '));
            },
            val: function(v) {
                var isInput = el.is('input'),
                    method = isInput ? 'val' : 'text',
                    r;

                if (arguments.length > 0) {
                    if (el[method]() !== v) {
                        el[method](v);
                    }
                    r = el;
                } else {
                    r = el[method]();
                }

                return r;
            },
            getMCharsBeforeCount: function(index, onCleanVal) {
                for (var count = 0, i = 0, maskL = mask.length; i < maskL && i < index; i++) {
                    if (!jMask.translation[mask.charAt(i)]) {
                        index = onCleanVal ? index + 1 : index;
                        count++;
                    }
                }
                return count;
            },
            caretPos: function (originalCaretPos, oldLength, newLength, maskDif) {
                var translation = jMask.translation[mask.charAt(Math.min(originalCaretPos - 1, mask.length - 1))];

                return !translation ? p.caretPos(originalCaretPos + 1, oldLength, newLength, maskDif)
                    : Math.min(originalCaretPos + newLength - oldLength - maskDif, newLength);
            },
            behaviour: function(e) {
                e = e || window.event;
                p.invalid = [];

                var keyCode = el.data('mask-keycode');

                if ($.inArray(keyCode, jMask.byPassKeys) === -1) {
                    var caretPos    = p.getCaret(),
                        currVal     = p.val(),
                        currValL    = currVal.length,
                        newVal      = p.getMasked(),
                        newValL     = newVal.length,
                        maskDif     = p.getMCharsBeforeCount(newValL - 1) - p.getMCharsBeforeCount(currValL - 1),
                        changeCaret = caretPos < currValL;

                    p.val(newVal);

                    if (changeCaret) {
                        // Avoid adjusting caret on backspace or delete
                        if (!(keyCode === 8 || keyCode === 46)) {
                            caretPos = p.caretPos(caretPos, currValL, newValL, maskDif);
                        }
                        p.setCaret(caretPos);
                    }

                    return p.callbacks(e);
                }
            },
            getMasked: function(skipMaskChars, val) {
                var buf = [],
                    value = val === undefined ? p.val() : val + '',
                    m = 0, maskLen = mask.length,
                    v = 0, valLen = value.length,
                    offset = 1, addMethod = 'push',
                    resetPos = -1,
                    lastMaskChar,
                    check;

                if (options.reverse) {
                    addMethod = 'unshift';
                    offset = -1;
                    lastMaskChar = 0;
                    m = maskLen - 1;
                    v = valLen - 1;
                    check = function () {
                        return m > -1 && v > -1;
                    };
                } else {
                    lastMaskChar = maskLen - 1;
                    check = function () {
                        return m < maskLen && v < valLen;
                    };
                }

                while (check()) {
                    var maskDigit = mask.charAt(m),
                        valDigit = value.charAt(v),
                        translation = jMask.translation[maskDigit];

                    if (translation) {
                        if (valDigit.match(translation.pattern)) {
                            buf[addMethod](valDigit);
                            if (translation.recursive) {
                                if (resetPos === -1) {
                                    resetPos = m;
                                } else if (m === lastMaskChar) {
                                    m = resetPos - offset;
                                }

                                if (lastMaskChar === resetPos) {
                                    m -= offset;
                                }
                            }
                            m += offset;
                        } else if (translation.optional) {
                            m += offset;
                            v -= offset;
                        } else if (translation.fallback) {
                            buf[addMethod](translation.fallback);
                            m += offset;
                            v -= offset;
                        } else {
                            p.invalid.push({p: v, v: valDigit, e: translation.pattern});
                        }
                        v += offset;
                    } else {
                        if (!skipMaskChars) {
                            buf[addMethod](maskDigit);
                        }

                        if (valDigit === maskDigit) {
                            v += offset;
                        }

                        m += offset;
                    }
                }

                var lastMaskCharDigit = mask.charAt(lastMaskChar);
                if (maskLen === valLen + 1 && !jMask.translation[lastMaskCharDigit]) {
                    buf.push(lastMaskCharDigit);
                }

                return buf.join('');
            },
            callbacks: function (e) {
                var val = p.val(),
                    changed = val !== oldValue,
                    defaultArgs = [val, e, el, options],
                    callback = function(name, criteria, args) {
                        if (typeof options[name] === 'function' && criteria) {
                            options[name].apply(this, args);
                        }
                    };

                callback('onChange', changed === true, defaultArgs);
                callback('onKeyPress', changed === true, defaultArgs);
                callback('onComplete', val.length === mask.length, defaultArgs);
                callback('onInvalid', p.invalid.length > 0, [val, e, el, p.invalid, options]);
            }
        };

        el = $(el);
        var jMask = this, oldValue = p.val(), regexMask;

        mask = typeof mask === 'function' ? mask(p.val(), undefined, el,  options) : mask;


        // public methods
        jMask.mask = mask;
        jMask.options = options;
        jMask.remove = function() {
            var caret = p.getCaret();
            p.destroyEvents();
            p.val(jMask.getCleanVal());
            p.setCaret(caret - p.getMCharsBeforeCount(caret));
            return el;
        };

        // get value without mask
        jMask.getCleanVal = function() {
            return p.getMasked(true);
        };

        // get masked value without the value being in the input or element
        jMask.getMaskedVal = function(val) {
            return p.getMasked(false, val);
        };

        jMask.init = function(onlyMask) {
            onlyMask = onlyMask || false;
            options = options || {};

            jMask.clearIfNotMatch  = $.jMaskGlobals.clearIfNotMatch;
            jMask.byPassKeys       = $.jMaskGlobals.byPassKeys;
            jMask.translation      = $.extend({}, $.jMaskGlobals.translation, options.translation);

            jMask = $.extend(true, {}, jMask, options);

            regexMask = p.getRegexMask();

            if (onlyMask === false) {

                if (options.placeholder) {
                    el.attr('placeholder' , options.placeholder);
                }

                // this is necessary, otherwise if the user submit the form
                // and then press the "back" button, the autocomplete will erase
                // the data. Works fine on IE9+, FF, Opera, Safari.
                if (el.data('mask')) {
                    el.attr('autocomplete', 'off');
                }

                p.destroyEvents();
                p.events();

                var caret = p.getCaret();
                p.val(p.getMasked());
                p.setCaret(caret + p.getMCharsBeforeCount(caret, true));

            } else {
                p.events();
                p.val(p.getMasked());
            }
        };

        jMask.init(!el.is('input'));
    };

    $.maskWatchers = {};
    var HTMLAttributes = function () {
            var input = $(this),
                options = {},
                prefix = 'data-mask-',
                mask = input.attr('data-mask');

            if (input.attr(prefix + 'reverse')) {
                options.reverse = true;
            }

            if (input.attr(prefix + 'clearifnotmatch')) {
                options.clearIfNotMatch = true;
            }

            if (input.attr(prefix + 'selectonfocus') === 'true') {
                options.selectOnFocus = true;
            }

            if (notSameMaskObject(input, mask, options)) {
                return input.data('mask', new Mask(this, mask, options));
            }
        },
        notSameMaskObject = function(field, mask, options) {
            options = options || {};
            var maskObject = $(field).data('mask'),
                stringify = JSON.stringify,
                value = $(field).val() || $(field).text();
            try {
                if (typeof mask === 'function') {
                    mask = mask(value);
                }
                return typeof maskObject !== 'object' || stringify(maskObject.options) !== stringify(options) || maskObject.mask !== mask;
            } catch (e) {}
        },
        eventSupported = function(eventName) {
            var el = document.createElement('div'), isSupported;

            eventName = 'on' + eventName;
            isSupported = (eventName in el);

            if ( !isSupported ) {
                el.setAttribute(eventName, 'return;');
                isSupported = typeof el[eventName] === 'function';
            }
            el = null;

            return isSupported;
        };

    $.fn.mask = function(mask, options) {
        options = options || {};
        var selector = this.selector,
            globals = $.jMaskGlobals,
            interval = globals.watchInterval,
            watchInputs = options.watchInputs || globals.watchInputs,
            maskFunction = function() {
                if (notSameMaskObject(this, mask, options)) {
                    return $(this).data('mask', new Mask(this, mask, options));
                }
            };

        $(this).each(maskFunction);

        if (selector && selector !== '' && watchInputs) {
            clearInterval($.maskWatchers[selector]);
            $.maskWatchers[selector] = setInterval(function(){
                $(document).find(selector).each(maskFunction);
            }, interval);
        }
        return this;
    };

    $.fn.masked = function(val) {
        return this.data('mask').getMaskedVal(val);
    };

    $.fn.unmask = function() {
        clearInterval($.maskWatchers[this.selector]);
        delete $.maskWatchers[this.selector];
        return this.each(function() {
            var dataMask = $(this).data('mask');
            if (dataMask) {
                dataMask.remove().removeData('mask');
            }
        });
    };

    $.fn.cleanVal = function() {
        return this.data('mask').getCleanVal();
    };

    $.applyDataMask = function(selector) {
        selector = selector || $.jMaskGlobals.maskElements;
        var $selector = (selector instanceof $) ? selector : $(selector);
        $selector.filter($.jMaskGlobals.dataMaskAttr).each(HTMLAttributes);
    };

    var globals = {
        maskElements: 'input,td,span,div',
        dataMaskAttr: '*[data-mask]',
        dataMask: true,
        watchInterval: 300,
        watchInputs: true,
        useInput: eventSupported('input'),
        watchDataMask: false,
        byPassKeys: [9, 16, 17, 18, 36, 37, 38, 39, 40, 91],
        translation: {
            '0': {pattern: /\d/},
            '9': {pattern: /\d/, optional: true},
            '#': {pattern: /\d/, recursive: true},
            'A': {pattern: /[a-zA-Z0-9]/},
            'S': {pattern: /[a-zA-Z]/}
        }
    };

    $.jMaskGlobals = $.jMaskGlobals || {};
    globals = $.jMaskGlobals = $.extend(true, {}, globals, $.jMaskGlobals);

    // looking for inputs with data-mask attribute
    if (globals.dataMask) {
        $.applyDataMask();
    }

    setInterval(function() {
        if ($.jMaskGlobals.watchDataMask) {
            $.applyDataMask();
        }
    }, globals.watchInterval);
}));



$("#date").keyup(function (e) {
    if (e.keyCode != 193 && e.keyCode != 111) {
        console.log(e.keyCode);
        if (e.keyCode != 8) {
            if ($(this).val().length == 2) {
                $(this).val($(this).val() + "/");
            } else if ($(this).val().length == 5) {
                $(this).val($(this).val() + "/");
            }
        } else {
            var temp = $(this).val();
            if ($(this).val().length == 5) {
                $(this).val(temp.substring(0, 4));
            } else if ($(this).val().length == 2) {
                $(this).val(temp.substring(0, 1));
            }
        }
    } else {
        var temp = $(this).val();
        var tam = $(this).val().length;
        $(this).val(temp.substring(0, tam-1));
    }
});






$(document).ready(function() {
   // $('#date').mask('00/00/0000');


    $('#date').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
})



/* clears form on focus and exit unless entire field is filled */

/*
Messing up form: when user clicks inside the field it clears the info
*/


/*jQuery(function () {
    var input = jQuery('#medicare input[type=text], #userForm textarea');

    input.focus(function () {

        jQuery(this).attr('data-default', jQuery(this).val());
        jQuery(this).val('');

    }).blur(function () {
        var el = jQuery(this);

        if (el.val() == '')
            el.val(el.attr('data-default'));
    });
});*/




$("[data-input-type=phone]", "body")
    .mask("(999) 999 99 99")
    .bind("blur", function () {
        // force revalidate on blur.

        var frm = $(this).parents("form");
        // if form has a validator
        if ($.data(frm[0], 'validator')) {
            var validator = $(this).parents("form").validate();
            validator.settings.onfocusout.apply(validator, [this]);
        }
    });

$(document).ready(function()
{

    function autoComplete(e){
        var eventKeyCode = e.which;
    }


    function updateZip2()
    {
        var zip1 = $("#hero-zip-submit-input").val();
        $("#zip").val(zip1);
        //$.debounce(200, autoComplete(e));
    }


    function updateZip1()
    {
        var zip2 = $("#zip").val();
        $("#hero-zip-submit-input").val(zip2);
    }

    $(document).on("change, keyup", "#zip", updateZip1);
    $(document).on("change, keyup", "#hero-zip-submit-input", updateZip2);

});




/*

 $.ajax({
 url: 'http://api.apigurus.com/iplocation/v1.8/locateip',
 type:'GET',
 dataType: 'json',
 data: { key: "ExampleKey123456789", ip : $('#ip_address').val()} ,


 ?key=&ip=12.25.222.242&format=JSON


 success: function (response) {
 var city = response.city;
 window.state = city[city.length - 2] + city[city.length - 1];
 console.log(state);
 }
 });

 */


$(window).load(function () {

    var zipVal = $('input[name=zip]').val(); 
    var zipcodeVal = $('input[name=zipcode]').val();
    if(zipcodeVal == null)
    {
        $.ajax({
            url: 'http://' + http_host + '/lp/api/v1/ext-misc/zipcode-by-ip/',
            type:'GET',
            data: {
                format: 'json'
            },
            success: function (response) {

                    $('#zip').val(response.zip_code);
                    $("#hero-zip-submit-input").val(response.zip_code);

            }
        });
    }


    /*$.ajax({
     url: 'http://' + http_host + '/lp/api/v1/core/phone/',
     type:'GET',
     data: {
     format: 'json',
     offer_id: $('#offer_id').val(),
     aff_sub: $('#aff_sub').val(),
     affiliate_id: $('#aff_id').val()
     },
     success: function (response) {
     response.phone = response.phone.replace(/(\d\d\d)(\d\d\d)(\d\d\d\d)/, '($1) $2-$3');
     $('.phone').attr('href', response.phone);
     $('.phone').html('<strong>' + response.phone + '</strong>');
     $('input[name=phone_number]').val(response.phone);
     }
     });*/

    $.ajax({
        url: 'http://' + http_host + '/lp/api/v1/core/cities',
        type:'GET',
        data: {
            format: 'json',
            zip_code: $('#zip').val(),
        },
        success: function (response) {
            $('#state').val(response.state);
            $('#city').val(response.city);
        }
    });


    /*$('#carousel').flexslider({
     animation: "slide",
     controlNav: false,
     animationLoop: true,
     slideshow: false,
     itemWidth: 210,
     itemMargin: 0
     });*/

    $('input#state').val(window.state);

    //$(".validate").validate();


    /*
     $('#submit').on('click', function (e) {
     var passed = true,
     errors = [],
     errorCount = 0,
     html = '',
     errs;

     /!*if(typeof(LincxSettings) != "undefined") {
     LincxSettings.typvr120 = "off";
     }
     //e.preventDefault();
     $('#error-list').remove();*!/
     // check all the radio buttons

     /!* if(self_emp) {
     if ( ! $('input[name=self_emp]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Are You Self-Employed Must be Answered';
     ++errorCount;
     }
     };

     if(insured) {
     if ( ! $('input[name=insured]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Are You Currently Insured Must be Answered';
     ++errorCount;
     }
     };

     if(Spouse) {
     if ( ! $('input[name=Spouse]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Include Spouse Must be Answered';
     ++errorCount;
     }
     };

     if(affordable) {
     if ( ! $('input[name=affordable]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Is this something you would be able to afford Must be Answered';
     ++errorCount;
     }
     };

     if(hospitalized) {
     if ( ! $('input[name=hospitalized]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Anyone Hospitalized in Last 5 Years Must be Answered';
     ++errorCount;
     }
     };

     if(physician) {
     if ( ! $('input[name=physician]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Anyone Treated by Physician in Last 12 Months Must be Answered';
     ++errorCount;
     }
     };

     if(prescription) {
     if ( ! $('input[name=prescription]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Anyone Taking Prescription Medications Must be Answered';
     ++errorCount;
     }
     };

     if(health) {
     if ( ! $('input[name=health]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Any Major Health Conditions Must be Answered';
     ++errorCount;
     }
     };

     if(previously_denied) {
     if ( ! $('input[name=previously-denied]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Have You Ever Been Denied Health Insurance Must be Answered';
     ++errorCount;
     }
     };

     if(ss_disabled) {
     if ( ! $('input[name=ss-disabled]:checked').val() ) {
     passed = false;
     errors[errorCount] = 'Are You Currently on Social Security or Disability Must be Answered';
     ++errorCount;
     }
     };

     if(pregnant) {
     if (!$('input[name=pregnant]:checked').val()) {
     passed = false;
     errors[errorCount] = 'Is There Anyone on the Policy Who is Pregnant Must be Answered';
     ++errorCount;
     }
     };*!/


     $('#h-conditions .checklist input').each(function (i, v) {
     if (this.checked) {
     $(this).val('Y');
     } else {
     $(this).val('N');
     }
     });

     if ($('.validate').valid() && passed) {
     return true;
     } else {
     if (!passed) {
     errs = $('<div id="error-list" class="error"></div>');
     html = '<ul class="error-list">';
     for (i = 0; i < errorCount; ++i) {
     html = html + '<li>' + errors[i] + '</li>';
     }
     html = html + '</ul>';
     errs.html(html);
     $('#submit').parent().before(errs[0]);
     passed = true;
     }
     return false;
     }

     });
     */


    $('#birthday_selects select').change(function () {
        $('#applicant_dob').val($('#DateOfBirth_Month option:selected').val() + ' ' + $('#DateOfBirth_Day option:selected').val() + ' ' + $('#DateOfBirth_Year option:selected').val());
    });

    $('#phone_container input').focusout(function () {
        $('#main_phone').val('(' + $('#phone').val() + ')' + $('#phone2').val() + $('#phone3').val());
    });

    $('#fname').focus(function () {
        if ($('#fname').val() == 'First Name') {
            $('#fname').val("");
        }
    });

    $('#fname').focusout(function () {
        if ($('#fname').val() == '') {
            $('#fname').val("First Name");
        }
    });

    $('#lname').focus(function () {
        if ($('#lname').val() == 'Last Name') {
            $('#lname').val("");
        }
    });

    $('#lname').focusout(function () {
        if ($('#lname').val() == '') {
            $('#lname').val("Last Name");
        }
    });
/*
    function afterHrs() {
        var myOffset = new Date().getTimezoneOffset() / 60;
        var myLocalHr = new Date().getHours();
        var UTCHr = myLocalHr + myOffset;
        var PacifHr = UTCHr - 7;
        //Also we would like to have Agile in place for after-hours (8pm pacific to 6am pacific)
        return (PacifHr >= 20 || PacifHr < 6);
    };



    function get_dob_fastquote () {
        if ($('#date').length){
            var dob_fastquote = $('#date').val();
            dob_fastquote = dob_fastquote.replace('/', '-');
            dob_fastquote = dob_fastquote.replace('/', '-');
            return dob_fastquote;

        }

    }*/

/*

    if ( $('#date').length ) {
        $('#date').change(get_dob_fastquote());
    }
*/




/*
    var isAfterHrs = afterHrs();

    $('#actionform').load(function () {
        //data = Base64.encode($('#email').val());
        var state = $('#state').val();
        var agile_restricted_state = ["MA", "MD", "MI", "MN", "MT", "NJ", "NY", "RI", "VT"];

        var thankyou_short = 'thank-you.php?form=short'
            + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
            + '&affiliate_id=' + $('#affiliate_id').val() + '&aff_sub=' + $('#aff_sub').val()
            + '&inty=' + $('#insurance_type').val() + '&transaction_id=' + $('#transaction_id').val()
            + '&aff_ref=' + $('#Affiliate_Ref').val();

        var thankyou_long = 'thank-you.php?form=long'
            + '&zip=' + $('#zip').val() + '&offer_id=' + $('#offer_id').val()
            + '&affiliate_id=' + $('#affiliate_id').val() + '&aff_sub=' + $('#aff_sub').val()
            + '&inty=' + $('#insurance_type').val() + '&transaction_id=' + $('#transaction_id').val()
            + '&aff_ref=' + $('#Affiliate_Ref').val();

        var agile_health = 'http://agilehealthinsurance.7eer.net/c/251325/284493/3530?'
            + 'p.census[location][zip]=' + $('#zip').val() + '&p.census[member][0][dob]=' + get_dob_fastquote ()
            + '&p.census[member][0][gender]=' + $('#gender').val() + '&p.census[member][0][role]=P';

        var formid = 1;

        if ($('#insurance_type').val() == 'health') {
            if (($.inArray(state, agile_restricted_state) > -1)) {
                if (formid == 1) {
                    $(location).attr('href', thankyou_short);
                } else {
                    $(location).attr('href', thankyou_long);
                }
            } else if (isAfterHrs) {
                $(location).attr('href', agile_health);
            } else {
                var a = Math.floor(10 * Math.random());
                var isEven = function (number) {
                    return (number % 2 == 0) ? true : false;
                };
                if (isEven(a)) {
                    if (formid == 1) {
                        $(location).attr('href', thankyou_short);
                    } else {
                        $(location).attr('href', thankyou_long);
                    }
                } else {
                    $(location).attr('href', agile_health);
                }
            }
        } else {
            if (formid == 1) {
                $(location).attr('href', thankyou_short);
            } else {
                $(location).attr('href', thankyou_long);
            }
        }
    });*/

    //$(".modal-inline").colorbox({inline:true, width:"60%",height:"70%"});

    $('#lb_conditions').on('change', function () {
        $('#previous_conditions').slideToggle(200);
    });

    $('#lb_conditions2').on('click', function () {
        $('#previous_conditions').slideUp(200);
    });

    function getAge() {
        //var birthDate = new Date($('#applicant_dob').val());
        var birthDate = new Date($('#date').val());
        var ageMs = Date.now() - birthDate.getTime();
        var age = ageMs / 1000 / 60 / 60 / 24 / 365;
        return age;
    }

    if ($('#insurance_type').val() == 'medicare') {
        $('#health_only').hide();
    }
/*
    if ($('#form_title').text() == 'Fill in this short medicare form and click submit.') {
        $('#health_only').hide();
    }
*/


/*


    //$('#DateOfBirth_Day,#DateOfBirth_Month,#DateOfBirth_Year').change(function () {
    document.getElementById("date").onchange = function () {
        //$('#applicant_dob').val($('#DateOfBirth_Month option:selected').val() + ' ' + $('#DateOfBirth_Day option:selected').val() + ' ' + $('#DateOfBirth_Year option:selected').val());

        if (getAge() >= 64.5) {
            $('#health_only').slideUp(300);
            $('#insurance_type').val('medicare');
            $('#form_title').text(function () {
                return $(this).text().replace("health", "medicare");
            });
            $('#form_info').text(function () {
                return $(this).text().replace("health", "medicare");
            });
            $("#household-size").prop('required', false);
            $("#income").prop('required', false);

        } else {

            if (getAge() < 64.5) {
                $('#health_only').slideDown(300);
                $('#insurance_type').val('health');
                $('#form_title').text(function () {
                    return $(this).text().replace("medicare", "health");
                });
                $('#form_info').text(function () {
                    return $(this).text().replace("medicare", "health");
                });
                $("#household-size").prop('required', true);
                $("#income").prop('required', true);
            }
        }
    };

    */



    function check_health_fields() {

        if (getAge() >= 64.5) {
            $('#health_only').slideUp(300);
            $('#insurance_type').val('medicare');
            $('#form_title').text(function () {
                return $(this).text().replace("health", "medicare");
            });
            $('#form_info').text(function () {
                return $(this).text().replace("health", "medicare");
            });
            $("#household-size").prop('required', false);
            $("#income").prop('required', false);
            $('#form_title').text('Fill in this short medicare form and click submit.');

        } else {

            if (getAge() < 64.5) {
                $('#health_only').slideDown(300);
                $('#insurance_type').val('health');
                $('#form_title').text(function () {
                    return $(this).text().replace("medicare", "health");
                });
                $('#form_info').text(function () {
                    return $(this).text().replace("medicare", "health");
                });
                $("#household-size").prop('required', true);
                $("#income").prop('required', true);
                $('#form_title').text('Fill in this short health form and click submit.');
            }
        }
    };


    //document.getElementById("date").onchange =


    $(document).ready(check_health_fields);


    if ( $('#date').length ) {
        $("#date").change(check_health_fields)
    }








    $(function () {

        /*
         $(document).delegate("a","click",function() {
         window.onbeforeunload = null;
         });*/

        /*$(document).delegate("form","click",function() {
         window.onbeforeunload = null;
         });
         */

    });


    /* function to hide/show health condtions on long form - Simon Lacey */

    function h_conditions() {
        document.getElementById('previous_conditions').style.display = "none";
    }

    function show() {
        document.getElementById('previous_conditions').style.display = "block";
    }


    /* BrokersWeb Exit Script ---------------------------
     var closewindow = true;
     // leave page code for BorkersWeb
     window.onbeforeunload = function() {
     if (closewindow) {
     var ifrm = $('<iframe></iframe>');
     ifrm.attr({
     'src': 'partners-list.php?state=' + window.state,
     'width': '100%',
     'height': '1200',
     'frameborder': '0'
     });
     $('body').empty().append(ifrm[0]);
     //location = 'partners-list.php?state=' + window.state;
     return "Congratulations! You're prequalified by the following providers." + "\n\r" + "Stay on this page to view them now.";
     }
     };

     $('a').on('click', function(){
     closewindow = false;
     });
     $('input[type=submit]').on('click', function(){
     closewindow = false;
     });
     */





    function fill_income() {
        $("#income").empty();
        switch ($("#household-size").val()) {
            case '1':
                $("#income").append(new Option("$0 to $29,000", "0-29,000"));
                $("#income").append(new Option("$29,000 to $47,000", "29,000-47,000"));
                $("#income").append(new Option("$47,000 or more", "47,000 or more"));
                $("#income").val("29,000-47,000");
                break;
            case '2':
                $("#income").append(new Option("$0 to $40,000", "0-40,000"));
                $("#income").append(new Option("$40,000 to $64,000", "40,000-64,000"));
                $("#income").append(new Option("$64,000 or more", "64,000 or more"));
                $("#income").val("40,000-64,000");
                break;
            case '3':
                $("#income").append(new Option("$0 to $50,000", "0-50,000"));
                $("#income").append(new Option("$50,000 to $80,000", "50,000-80,000"));
                $("#income").append(new Option("$80,000 or more", "80,000 or more"));
                $("#income").val("50,000-80,000");
                break;
            case '4':
                $("#income").append(new Option("$0 to $61,000", "0-61,000"));
                $("#income").append(new Option("$61,000 to $97,000", "61,000-97,000"));
                $("#income").append(new Option("$97,000 or more", "97,000 or more"));
                $("#income").val("61,000-97,000");
                break;
            case '5':
                $("#income").append(new Option("$0 to $71,000", "0-71,000"));
                $("#income").append(new Option("$71,000 to $114,000", "71,000-114,000"));
                $("#income").append(new Option("$114,000 or more", "114,000 or more"));
                $("#income").val("71,000-114,000");
                break;
            case '6':
                $("#income").append(new Option("$0 to $81,000", "0-81,000"));
                $("#income").append(new Option("$81,000 to $130,000", "81,000-130,000"));
                $("#income").append(new Option("$130,000 or more", "130,000 or more"));
                $("#income").val("81,000-130,000");
                break;
            case '7':
                $("#income").append(new Option("$0 to $92,000", "0-92,000"));
                $("#income").append(new Option("$92,000 to $147,000", "92,000-147,000"));
                $("#income").append(new Option("$147,000 or more", "147,000 or more"));
                $("#income").val("92,000-147,000");
                break;
            case '8':
                $("#income").append(new Option("$0 to $102,000", "0-102,000"));
                $("#income").append(new Option("$102,000 to $164,000", "102,000-164,000"));
                $("#income").append(new Option("$164,000 or more", "164,000 or more"));
                $("#income").val("102,000-164,000");
                break;
        }

    }

    $(document).ready(fill_income)
    $("#household-size").change(fill_income)


/*

*/



    var terms = $('.terms').text();
    $("#TCPA_Language").val(terms);


/*


    let dobpattern = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

    let dobpattern2 = /^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;

    let dobpattern3 = "[0-9]{2}/[0-9]{2}/[0-9]{4}";


    //$("#date").attr("pattern", dobpattern2);


    function f(){
        let exp = "^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:XXX)$",
            year = new Date().getFullYear(),
            maxYear = year - 0,
            minYear = year - 120;

        let arr = [];
        for (let i = minYear; i<maxYear; i+=1 ) {
            arr.push(i)
        }
        return exp.replace('XXX', arr.join('|'))
    }

pp = ^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:(?:1[6-9]|20)?\d{2})$

*/


/*
    //This will execute when your page is loaded
    $(function () {
        //Required attribute fallback
        $('#medicare').submit(function () {
            if (!attributeSupported("required") || ($.browser.safari)) {
                //If required attribute is not supported or browser is Safari
                // (Safari thinks that it has this attribute, but it does not work), then check all fields that has required attribute
                $("#medicare [required]").each(function (index) {
                    if (!$(this).val()) {
                        //If at least one required value is empty, then ask to fill all required fields.
                        alert("Please fill all required fields.");
                        return false;
                    }
                });
            }
            return false; //This is a test form and I'm not going to submit it
        });
    });

    */


    //This checks if a specific attribute is supported



    /*function attributeSupported(attribute) {
        return (attribute in document.createElement("input"));
    }

    function isSafari() {
        return /safari/.test(navigator.userAgent.toLowerCase());
    }*/

    //Required attribute fallback
    /*$('#medicare').submit(function() {
        var isOk = true;   
        if (!attributeSupported("required") || isSafari()) {
            //If required attribute is not supported or browser is Safari
            // (Safari thinks that it has this attribute, but it does not work), then check all fields that has required attribute
            $("#medicare [required]").each(function(index) {
                if (!$(this).val()) {
                    //If at least one required value is empty, then ask to fill all required fields.
                    isOk = false;
                    alert("Please fill all required fields.");
                    return false;
                }
            });
            //return false; //This is a test form and I'm not going to submit it
        }
        
        if (isOk) {
            $("form").submit(function(){
                $("#preloader").css("z-index", "10");
            });
            return true;
        } else {
            return false;
        }

    });*/

    




});




// Validation

$().ready(function () {
    
    jQuery.validator.addMethod("laxEmail", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/.test( value );
    }, 'Please enter a valid email address.');

    /*jQuery.validator.addMethod("myPhoneValid", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^(\+0?1\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/.test( value );
    }, 'Please enter a valid email address.');*/

    $.validator.addMethod( "myPhoneValid", function( value, element ) {
        //value = value.replace( /\s+/g, "" );
        return this.optional( element ) || value.length > 9 &&
            value.match( /^(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}/ );
    }, "Please specify a valid phone number" );

    var DOBpattern = /^(?:(?:(?:0?[13578]|1[02])(\/|-|\.)31)\1|(?:(?:0?[1,3-9]|1[0-2])(\/|-|\.)(?:29|30)\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:0?2(\/|-|\.)29\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:(?:0?[1-9])|(?:1[0-2]))(\/|-|\.)(?:0?[1-9]|1\d|2[0-8])\4(?:1900|1901|1902|1903|1904|1905|1906|1907|1908|1909|1910|1911|1912|1913|1914|1915|1916|1917|1918|1919|1920|1921|1922|1923|1924|1925|1926|1927|1928|1929|1930|1931|1932|1933|1934|1935|1936|1937|1938|1939|1940|1941|1942|1943|1944|1945|1946|1947|1948|1949|1950|1951|1952|1953|1954|1955|1956|1957|1958|1959|1960|1961|1962|1963|1964|1965|1966|1967|1968|1969|1970|1971|1972|1973|1974|1975|1976|1977|1978|1979|1980|1981|1982|1983|1984|1985|1986|1987|1988|1989|1990|1991|1992|1993|1994|1995|1996|1997|1998|1999|2000|2001|2002|2003|2004|2005|2006|2007|2008|2009|2010|2011|2012|2013|2014|2015|2016)$/;

    $.validator.addMethod( "myDOBValid", function( value, element ) {
        //value = value.replace( /\s+/g, "" );
        return this.optional( element ) || value.match( DOBpattern );
    }, "Please specify a valid date of birth" );


    $('#medicare').validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2,
            },
            last_name: {
                required: true,
                minlength: 2,
            },
            street1: {
                required: true,
                minlength: 2,
            },
            city: {
                required: true,
                minlength: 2,
            },
            zip: {
                required: true,
                minlength: 5,
            },
            applicant_dob: {
                required: true,
                myDOBValid: true
            },
            day_phone: {
                required: true,
                //phoneUS: true,
                myPhoneValid: true
            },
            email: {
                required: true,
                email: true,
                laxEmail: true,

            },

        },
        //focusInvalid: false,

        invalidHandler: function(form, validator) {

            if (!validator.numberOfInvalids())
                return;

            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 400);

        }
    });


/*

    $('#form1').validate({
        rules: {
            zip: {
                required: true,
                minlength: 5,
            }
        },
        //focusInvalid: false,

        invalidHandler: function(form, validator) {

            if (!validator.numberOfInvalids())
                return;

            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 400);

        }
    });
*/




    $('#contact-us').validate({
        rules: {
            cname: {
                required: true,
                minlength: 2
            },
            ccompany: {
                required: true,
                minlength: 2
            },
            city: {
                required: true,
                minlength: 2
            },
            cphone: {
                required: true,
                //phoneUS: true,
                myPhoneValid: true
            },
            cemail: {
                required: true,
                email: true,
                laxEmail: true
            }

        },
        //focusInvalid: false,

        invalidHandler: function(form, validator) {

            if (!validator.numberOfInvalids())
                return;

            $('html, body').animate({
                scrollTop: $(validator.errorList[0].element).offset().top
            }, 400);

        }





    });


/*

    $('#contact-us').onsubmit(function () {
        if (this.valid()){
            alert('Thank you for contacting us. Your message will be reviewed by a licensed agent and you will be contacted shortly. Have a great day.');
        } else {
            alert('Please fill the required fields.');
        }
    })
*/











});


/* insurance type switch code, working but not what i want - simon lacey */

/*

$(document).ready(function () {
    if ($('#health').is(':checked')) {
        $(".status").text("Health");
        $(".status").hasClass("success") === true ? $(".status").removeClass("success") : $(".status").addClass("alert");
    } else if ($('#medicare').is(':checked')) {
        $(".status").text("Medicare");
        $(".status").hasClass("alert") === true ? $(".status").removeClass("alert") : $(".status").addClass("success");
    }
    $("input[name=switch-x]").on("change", function () {
        if ($('#health').is(':checked')) {
            $(".status").text("Health");
            $(".status").hasClass("success") === true ? $(".status").removeClass("success") : $(".status").addClass("alert");
        } else if ($('#medicare').is(':checked')) {
            $(".status").text("Medicare");
            $(".status").hasClass("alert") === true ? $(".status").removeClass("alert") : $(".status").addClass("success");
        }
    });
}); 

*/

