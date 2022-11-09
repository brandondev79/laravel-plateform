/*!
  * Bootstrap v4.1.3 (https://getbootstrap.com/)
  * Copyright 2011-2018 The Bootstrap Authors (https://github.com/twbs/bootstrap/graphs/contributors)
  * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
  */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?e(exports,require("jquery"),require("popper.js")):"function"==typeof define&&define.amd?define(["exports","jquery","popper.js"],e):e(t.bootstrap={},t.jQuery,t.Popper)}(this,function(t,e,h){"use strict";function i(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function s(t,e,n){return e&&i(t.prototype,e),n&&i(t,n),t}function l(r){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{},e=Object.keys(o);"function"==typeof Object.getOwnPropertySymbols&&(e=e.concat(Object.getOwnPropertySymbols(o).filter(function(t){return Object.getOwnPropertyDescriptor(o,t).enumerable}))),e.forEach(function(t){var e,n,i;e=r,i=o[n=t],n in e?Object.defineProperty(e,n,{value:i,enumerable:!0,configurable:!0,writable:!0}):e[n]=i})}return r}e=e&&e.hasOwnProperty("default")?e.default:e,h=h&&h.hasOwnProperty("default")?h.default:h;var r,n,o,a,c,u,f,d,g,_,m,p,v,y,E,C,T,b,S,I,A,D,w,N,O,k,P,j,H,L,R,x,W,U,q,F,K,M,Q,B,V,Y,z,J,Z,G,$,X,tt,et,nt,it,rt,ot,st,at,lt,ct,ht,ut,ft,dt,gt,_t,mt,pt,vt,yt,Et,Ct,Tt,bt,St,It,At,Dt,wt,Nt,Ot,kt,Pt,jt,Ht,Lt,Rt,xt,Wt,Ut,qt,Ft,Kt,Mt,Qt,Bt,Vt,Yt,zt,Jt,Zt,Gt,$t,Xt,te,ee,ne,ie,re,oe,se,ae,le,ce,he,ue,fe,de,ge,_e,me,pe,ve,ye,Ee,Ce,Te,be,Se,Ie,Ae,De,we,Ne,Oe,ke,Pe,je,He,Le,Re,xe,We,Ue,qe,Fe,Ke,Me,Qe,Be,Ve,Ye,ze,Je,Ze,Ge,$e,Xe,tn,en,nn,rn,on,sn,an,ln,cn,hn,un,fn,dn,gn,_n,mn,pn,vn,yn,En,Cn,Tn,bn,Sn,In,An,Dn,wn,Nn,On,kn,Pn,jn,Hn,Ln,Rn,xn,Wn,Un,qn,Fn=function(i){var e="transitionend";function t(t){var e=this,n=!1;return i(this).one(l.TRANSITION_END,function(){n=!0}),setTimeout(function(){n||l.triggerTransitionEnd(e)},t),this}var l={TRANSITION_END:"bsTransitionEnd",getUID:function(t){for(;t+=~~(1e6*Math.random()),document.getElementById(t););return t},getSelectorFromElement:function(t){var e=t.getAttribute("data-target");e&&"#"!==e||(e=t.getAttribute("href")||"");try{return document.querySelector(e)?e:null}catch(t){return null}},getTransitionDurationFromElement:function(t){if(!t)return 0;var e=i(t).css("transition-duration");return parseFloat(e)?(e=e.split(",")[0],1e3*parseFloat(e)):0},reflow:function(t){return t.offsetHeight},triggerTransitionEnd:function(t){i(t).trigger(e)},supportsTransitionEnd:function(){return Boolean(e)},isElement:function(t){return(t[0]||t).nodeType},typeCheckConfig:function(t,e,n){for(var i in n)if(Object.prototype.hasOwnProperty.call(n,i)){var r=n[i],o=e[i],s=o&&l.isElement(o)?"element":(a=o,{}.toString.call(a).match(/\s([a-z]+)/i)[1].toLowerCase());if(!new RegExp(r).test(s))throw new Error(t.toUpperCase()+': Option "'+i+'" provided type "'+s+'" but expected type "'+r+'".')}var a}};return i.fn.emulateTransitionEnd=t,i.event.special[l.TRANSITION_END]={bindType:e,delegateType:e,handle:function(t){if(i(t.target).is(this))return t.handleObj.handler.apply(this,arguments)}},l}(e),Kn=(n="alert",a="."+(o="bs.alert"),c=(r=e).fn[n],u={CLOSE:"close"+a,CLOSED:"closed"+a,CLICK_DATA_API:"click"+a+".data-api"},f="alert",d="fade",g="show",_=function(){function i(t){this._element=t}var t=i.prototype;return t.close=function(t){var e=this._element;t&&(e=this._getRootElement(t)),this._triggerCloseEvent(e).isDefaultPrevented()||this._removeElement(e)},t.dispose=function(){r.removeData(this._element,o),this._element=null},t._getRootElement=function(t){var e=Fn.getSelectorFromElement(t),n=!1;return e&&(n=document.querySelector(e)),n||(n=r(t).closest("."+f)[0]),n},t._triggerCloseEvent=function(t){var e=r.Event(u.CLOSE);return r(t).trigger(e),e},t._removeElement=function(e){var n=this;if(r(e).removeClass(g),r(e).hasClass(d)){var t=Fn.getTransitionDurationFromElement(e);r(e).one(Fn.TRANSITION_END,function(t){return n._destroyElement(e,t)}).emulateTransitionEnd(t)}else this._destroyElement(e)},t._destroyElement=function(t){r(t).detach().trigger(u.CLOSED).remove()},i._jQueryInterface=function(n){return this.each(function(){var t=r(this),e=t.data(o);e||(e=new i(this),t.data(o,e)),"close"===n&&e[n](this)})},i._handleDismiss=function(e){return function(t){t&&t.preventDefault(),e.close(this)}},s(i,null,[{key:"VERSION",get:function(){return"4.1.3"}}]),i}(),r(document).on(u.CLICK_DATA_API,'[data-dismiss="alert"]',_._handleDismiss(new _)),r.fn[n]=_._jQueryInterface,r.fn[n].Constructor=_,r.fn[n].noConflict=function(){return r.fn[n]=c,_._jQueryInterface},_),Mn=(p="button",y="."+(v="bs.button"),E=".data-api",C=(m=e).fn[p],T="active",b="btn",I='[data-toggle^="button"]',A='[data-toggle="buttons"]',D="input",w=".active",N=".btn",O={CLICK_DATA_API:"click"+y+E,FOCUS_BLUR_DATA_API:(S="focus")+y+E+" blur"+y+E},k=function(){function n(t){this._element=t}var t=n.prototype;return t.toggle=function(){var t=!0,e=!0,n=m(this._element).closest(A)[0];if(n){var i=this._element.querySelector(D);if(i){if("radio"===i.type)if(i.checked&&this._element.classList.contains(T))t=!1;else{var r=n.querySelector(w);r&&m(r).removeClass(T)}if(t){if(i.hasAttribute("disabled")||n.hasAttribute("disabled")||i.classList.contains("disabled")||n.classList.contains("disabled"))return;i.checked=!this._element.classList.contains(T),m(i).trigger("change")}i.focus(),e=!1}}e&&this._element.setAttribute("aria-pressed",!this._element.classList.contains(T)),t&&m(this._element).toggleClass(T)},t.dispose=function(){m.removeData(this._element,v),this._element=null},n._jQueryInterface=function(e){return this.each(function(){var t=m(this).data(v);t||(t=new n(this),m(this).data(v,t)),"toggle"===e&&t[e]()})},s(n,null,[{key:"VERSION",get:function(){return"4.1.3"}}]),n}(),m(document).on(O.CLICK_DATA_API,I,function(t){t.preventDefault();var e=t.target;m(e).hasClass(b)||(e=m(e).closest(N)),k._jQueryInterface.call(m(e),"toggle")}).on(O.FOCUS_BLUR_DATA_API,I,function(t){var e=m(t.target).closest(N)[0];m(e).toggleClass(S,/^focus(in)?$/.test(t.type))}),m.fn[p]=k._jQueryInterface,m.fn[p].Constructor=k,m.fn[p].noConflict=function(){return m.fn[p]=C,k._jQueryInterface},k),Qn=(j="carousel",L="."+(H="bs.carousel"),R=".data-api",x=(P=e).fn[j],W={interval:5e3,keyboard:!0,slide:!1,pause:"hover",wrap:!0},U={interval:"(number|boolean)",keyboard:"boolean",slide:"(boolean|string)",pause:"(string|boolean)",wrap:"boolean"},q="next",F="prev",K="left",M="right",Q={SLIDE:"slide"+L,SLID:"slid"+L,KEYDOWN:"keydown"+L,MOUSEENTER:"mouseenter"+L,MOUSELEAVE:"mouseleave"+L,TOUCHEND:"touchend"+L,LOAD_DATA_API:"load"+L+R,CLICK_DATA_API:"click"+L+R},B="carousel",V="active",Y="slide",z="carousel-item-right",J="carousel-item-left",Z="carousel-item-next",G="carousel-item-prev",$=".active",X=".active.carousel-item",tt=".carousel-item",et=".carousel-item-next, .carousel-item-prev",nt=".carousel-indicators",it="[data-slide], [data-slide-to]",rt='[data-ride="carousel"]',ot=function(){function o(t,e){this._items=null,this._interval=null,this._activeElement=null,this._isPaused=!1,this._isSliding=!1,this.touchTimeout=null,this._config=this._getConfig(e),this._element=P(t)[0],this._indicatorsElement=this._element.querySelector(nt),this._addEventListeners()}var t=o.prototype;return t.next=function(){this._isSliding||this._slide(q)},t.nextWhenVisible=function(){!document.hidden&&P(this._element).is(":visible")&&"hidden"!==P(this._element).css("visibility")&&this.next()},t.prev=function(){this._isSliding||this._slide(F)},t.pause=function(t){t||(this._isPaused=!0),this._element.querySelector(et)&&(Fn.triggerTransitionEnd(this._element),this.cycle(!0)),clearInterval(this._interval),this._interval=null},t.cycle=function(t){t||(this._isPaused=!1),this._interval&&(clearInterval(this._interval),this._interval=null),this._config.interval&&!this._isPaused&&(this._interval=setInterval((document.visibilityState?this.nextWhenVisible:this.next).bind(this),this._config.interval))},t.to=function(t){var e=this;this._activeElement=this._element.querySelector(X);var n=this._getItemIndex(this._activeElement);if(!(t>this._items.length-1||t<0))if(this._isSliding)P(this._element).one(Q.SLID,function(){return e.to(t)});else{if(n===t)return this.pause(),void this.cycle();var i=n<t?q:F;this._slide(i,this._items[t])}},t.dispose=function(){P(this._element).off(L),P.removeData(this._element,H),this._items=null,this._config=null,this._element=null,this._interval=null,this._isPaused=null,this._isSliding=null,this._activeElement=null,this._indicatorsElement=null},t._getConfig=function(t){return t=l({},W,t),Fn.typeCheckConfig(j,t,U),t},t._addEventListeners=function(){var e=this;this._config.keyboard&&P(this._element).on(Q.KEYDOWN,function(t){return e._keydown(t)}),"hover"===this._config.pause&&(P(this._element).on(Q.MOUSEENTER,function(t){return e.pause(t)}).on(Q.MOUSELEAVE,function(t){return e.cycle(t)}),"ontouchstart"in document.documentElement&&P(this._element).on(Q.TOUCHEND,function(){e.pause(),e.touchTimeout&&clearTimeout(e.touchTimeout),e.touchTimeout=setTimeout(function(t){return e.cycle(t)},500+e._config.interval)}))},t._keydown=function(t){if(!/input|textarea/i.test(t.target.tagName))switch(t.which){case 37:t.preventDefault(),this.prev();break;case 39:t.preventDefault(),this.next()}},t._getItemIndex=function(t){return this._items=t&&t.parentNode?[].slice.call(t.parentNode.querySelectorAll(tt)):[],this._items.indexOf(t)},t._getItemByDirection=function(t,e){var n=t===q,i=t===F,r=this._getItemIndex(e),o=this._items.length-1;if((i&&0===r||n&&r===o)&&!this._config.wrap)return e;var s=(r+(t===F?-1:1))%this._items.length;return-1===s?this._items[this._items.length-1]:this._items[s]},t._triggerSlideEvent=function(t,e){var n=this._getItemIndex(t),i=this._getItemIndex(this._element.querySelector(X)),r=P.Event(Q.SLIDE,{relatedTarget:t,direction:e,from:i,to:n});return P(this._element).trigger(r),r},t._setActiveIndicatorElement=function(t){if(this._indicatorsElement){var e=[].slice.call(this._indicatorsElement.querySelectorAll($));P(e).removeClass(V);var n=this._indicatorsElement.children[this._getItemIndex(t)];n&&P(n).addClass(V)}},t._slide=function(t,e){var n,i,r,o=this,s=this._element.querySelector(X),a=this._getItemIndex(s),l=e||s&&this._getItemByDirection(t,s),c=this._getItemIndex(l),h=Boolean(this._interval);if(t===q?(n=J,i=Z,r=K):(n=z,i=G,r=M),l&&P(l).hasClass(V))this._isSliding=!1;else if(!this._triggerSlideEvent(l,r).isDefaultPrevented()&&s&&l){this._isSliding=!0,h&&this.pause(),this._setActiveIndicatorElement(l);var u=P.Event(Q.SLID,{relatedTarget:l,direction:r,from:a,to:c});if(P(this._element).hasClass(Y)){P(l).addClass(i),Fn.reflow(l),P(s).addClass(n),P(l).addClass(n);var f=Fn.getTransitionDurationFromElement(s);P(s).one(Fn.TRANSITION_END,function(){P(l).removeClass(n+" "+i).addClass(V),P(s).removeClass(V+" "+i+" "+n),o._isSliding=!1,setTimeout(function(){return P(o._element).trigger(u)},0)}).emulateTransitionEnd(f)}else P(s).removeClass(V),P(l).addClass(V),this._isSliding=!1,P(this._element).trigger(u);h&&this.cycle()}},o._jQueryInterface=function(i){return this.each(function(){var t=P(this).data(H),e=l({},W,P(this).data());"object"==typeof i&&(e=l({},e,i));var n="string"==typeof i?i:e.slide;if(t||(t=new o(this,e),P(this).data(H,t)),"number"==typeof i)t.to(i);else if("string"==typeof n){if("undefined"==typeof t[n])throw new TypeError('No method named "'+n+'"');t[n]()}else e.interval&&(t.pause(),t.cycle())})},o._dataApiClickHandler=function(t){var e=Fn.getSelectorFromElement(this);if(e){var n=P(e)[0];if(n&&P(n).hasClass(B)){var i=l({},P(n).data(),P(this).data()),r=this.getAttribute("data-slide-to");r&&(i.interval=!1),o._jQueryInterface.call(P(n),i),r&&P(n).data(H).to(r),t.preventDefault()}}},s(o,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return W}}]),o}(),P(document).on(Q.CLICK_DATA_API,it,ot._dataApiClickHandler),P(window).on(Q.LOAD_DATA_API,function(){for(var t=[].slice.call(document.querySelectorAll(rt)),e=0,n=t.length;e<n;e++){var i=P(t[e]);ot._jQueryInterface.call(i,i.data())}}),P.fn[j]=ot._jQueryInterface,P.fn[j].Constructor=ot,P.fn[j].noConflict=function(){return P.fn[j]=x,ot._jQueryInterface},ot),Bn=(at="collapse",ct="."+(lt="bs.collapse"),ht=(st=e).fn[at],ut={toggle:!0,parent:""},ft={toggle:"boolean",parent:"(string|element)"},dt={SHOW:"show"+ct,SHOWN:"shown"+ct,HIDE:"hide"+ct,HIDDEN:"hidden"+ct,CLICK_DATA_API:"click"+ct+".data-api"},gt="show",_t="collapse",mt="collapsing",pt="collapsed",vt="width",yt="height",Et=".show, .collapsing",Ct='[data-toggle="collapse"]',Tt=function(){function a(e,t){this._isTransitioning=!1,this._element=e,this._config=this._getConfig(t),this._triggerArray=st.makeArray(document.querySelectorAll('[data-toggle="collapse"][href="#'+e.id+'"],[data-toggle="collapse"][data-target="#'+e.id+'"]'));for(var n=[].slice.call(document.querySelectorAll(Ct)),i=0,r=n.length;i<r;i++){var o=n[i],s=Fn.getSelectorFromElement(o),a=[].slice.call(document.querySelectorAll(s)).filter(function(t){return t===e});null!==s&&0<a.length&&(this._selector=s,this._triggerArray.push(o))}this._parent=this._config.parent?this._getParent():null,this._config.parent||this._addAriaAndCollapsedClass(this._element,this._triggerArray),this._config.toggle&&this.toggle()}var t=a.prototype;return t.toggle=function(){st(this._element).hasClass(gt)?this.hide():this.show()},t.show=function(){var t,e,n=this;if(!this._isTransitioning&&!st(this._element).hasClass(gt)&&(this._parent&&0===(t=[].slice.call(this._parent.querySelectorAll(Et)).filter(function(t){return t.getAttribute("data-parent")===n._config.parent})).length&&(t=null),!(t&&(e=st(t).not(this._selector).data(lt))&&e._isTransitioning))){var i=st.Event(dt.SHOW);if(st(this._element).trigger(i),!i.isDefaultPrevented()){t&&(a._jQueryInterface.call(st(t).not(this._selector),"hide"),e||st(t).data(lt,null));var r=this._getDimension();st(this._element).removeClass(_t).addClass(mt),this._element.style[r]=0,this._triggerArray.length&&st(this._triggerArray).removeClass(pt).attr("aria-expanded",!0),this.setTransitioning(!0);var o="scroll"+(r[0].toUpperCase()+r.slice(1)),s=Fn.getTransitionDurationFromElement(this._element);st(this._element).one(Fn.TRANSITION_END,function(){st(n._element).removeClass(mt).addClass(_t).addClass(gt),n._element.style[r]="",n.setTransitioning(!1),st(n._element).trigger(dt.SHOWN)}).emulateTransitionEnd(s),this._element.style[r]=this._element[o]+"px"}}},t.hide=function(){var t=this;if(!this._isTransitioning&&st(this._element).hasClass(gt)){var e=st.Event(dt.HIDE);if(st(this._element).trigger(e),!e.isDefaultPrevented()){var n=this._getDimension();this._element.style[n]=this._element.getBoundingClientRect()[n]+"px",Fn.reflow(this._element),st(this._element).addClass(mt).removeClass(_t).removeClass(gt);var i=this._triggerArray.length;if(0<i)for(var r=0;r<i;r++){var o=this._triggerArray[r],s=Fn.getSelectorFromElement(o);if(null!==s)st([].slice.call(document.querySelectorAll(s))).hasClass(gt)||st(o).addClass(pt).attr("aria-expanded",!1)}this.setTransitioning(!0);this._element.style[n]="";var a=Fn.getTransitionDurationFromElement(this._element);st(this._element).one(Fn.TRANSITION_END,function(){t.setTransitioning(!1),st(t._element).removeClass(mt).addClass(_t).trigger(dt.HIDDEN)}).emulateTransitionEnd(a)}}},t.setTransitioning=function(t){this._isTransitioning=t},t.dispose=function(){st.removeData(this._element,lt),this._config=null,this._parent=null,this._element=null,this._triggerArray=null,this._isTransitioning=null},t._getConfig=function(t){return(t=l({},ut,t)).toggle=Boolean(t.toggle),Fn.typeCheckConfig(at,t,ft),t},t._getDimension=function(){return st(this._element).hasClass(vt)?vt:yt},t._getParent=function(){var n=this,t=null;Fn.isElement(this._config.parent)?(t=this._config.parent,"undefined"!=typeof this._config.parent.jquery&&(t=this._config.parent[0])):t=document.querySelector(this._config.parent);var e='[data-toggle="collapse"][data-parent="'+this._config.parent+'"]',i=[].slice.call(t.querySelectorAll(e));return st(i).each(function(t,e){n._addAriaAndCollapsedClass(a._getTargetFromElement(e),[e])}),t},t._addAriaAndCollapsedClass=function(t,e){if(t){var n=st(t).hasClass(gt);e.length&&st(e).toggleClass(pt,!n).attr("aria-expanded",n)}},a._getTargetFromElement=function(t){var e=Fn.getSelectorFromElement(t);return e?document.querySelector(e):null},a._jQueryInterface=function(i){return this.each(function(){var t=st(this),e=t.data(lt),n=l({},ut,t.data(),"object"==typeof i&&i?i:{});if(!e&&n.toggle&&/show|hide/.test(i)&&(n.toggle=!1),e||(e=new a(this,n),t.data(lt,e)),"string"==typeof i){if("undefined"==typeof e[i])throw new TypeError('No method named "'+i+'"');e[i]()}})},s(a,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return ut}}]),a}(),st(document).on(dt.CLICK_DATA_API,Ct,function(t){"A"===t.currentTarget.tagName&&t.preventDefault();var n=st(this),e=Fn.getSelectorFromElement(this),i=[].slice.call(document.querySelectorAll(e));st(i).each(function(){var t=st(this),e=t.data(lt)?"toggle":n.data();Tt._jQueryInterface.call(t,e)})}),st.fn[at]=Tt._jQueryInterface,st.fn[at].Constructor=Tt,st.fn[at].noConflict=function(){return st.fn[at]=ht,Tt._jQueryInterface},Tt),Vn=(St="dropdown",At="."+(It="bs.dropdown"),Dt=".data-api",wt=(bt=e).fn[St],Nt=new RegExp("38|40|27"),Ot={HIDE:"hide"+At,HIDDEN:"hidden"+At,SHOW:"show"+At,SHOWN:"shown"+At,CLICK:"click"+At,CLICK_DATA_API:"click"+At+Dt,KEYDOWN_DATA_API:"keydown"+At+Dt,KEYUP_DATA_API:"keyup"+At+Dt},kt="disabled",Pt="show",jt="dropup",Ht="dropright",Lt="dropleft",Rt="dropdown-menu-right",xt="position-static",Wt='[data-toggle="dropdown"]',Ut=".dropdown form",qt=".dropdown-menu",Ft=".navbar-nav",Kt=".dropdown-menu .dropdown-item:not(.disabled):not(:disabled)",Mt="top-start",Qt="top-end",Bt="bottom-start",Vt="bottom-end",Yt="right-start",zt="left-start",Jt={offset:0,flip:!0,boundary:"scrollParent",reference:"toggle",display:"dynamic"},Zt={offset:"(number|string|function)",flip:"boolean",boundary:"(string|element)",reference:"(string|element)",display:"string"},Gt=function(){function c(t,e){this._element=t,this._popper=null,this._config=this._getConfig(e),this._menu=this._getMenuElement(),this._inNavbar=this._detectNavbar(),this._addEventListeners()}var t=c.prototype;return t.toggle=function(){if(!this._element.disabled&&!bt(this._element).hasClass(kt)){var t=c._getParentFromElement(this._element),e=bt(this._menu).hasClass(Pt);if(c._clearMenus(),!e){var n={relatedTarget:this._element},i=bt.Event(Ot.SHOW,n);if(bt(t).trigger(i),!i.isDefaultPrevented()){if(!this._inNavbar){if("undefined"==typeof h)throw new TypeError("Bootstrap dropdown require Popper.js (https://popper.js.org)");var r=this._element;"parent"===this._config.reference?r=t:Fn.isElement(this._config.reference)&&(r=this._config.reference,"undefined"!=typeof this._config.reference.jquery&&(r=this._config.reference[0])),"scrollParent"!==this._config.boundary&&bt(t).addClass(xt),this._popper=new h(r,this._menu,this._getPopperConfig())}"ontouchstart"in document.documentElement&&0===bt(t).closest(Ft).length&&bt(document.body).children().on("mouseover",null,bt.noop),this._element.focus(),this._element.setAttribute("aria-expanded",!0),bt(this._menu).toggleClass(Pt),bt(t).toggleClass(Pt).trigger(bt.Event(Ot.SHOWN,n))}}}},t.dispose=function(){bt.removeData(this._element,It),bt(this._element).off(At),this._element=null,(this._menu=null)!==this._popper&&(this._popper.destroy(),this._popper=null)},t.update=function(){this._inNavbar=this._detectNavbar(),null!==this._popper&&this._popper.scheduleUpdate()},t._addEventListeners=function(){var e=this;bt(this._element).on(Ot.CLICK,function(t){t.preventDefault(),t.stopPropagation(),e.toggle()})},t._getConfig=function(t){return t=l({},this.constructor.Default,bt(this._element).data(),t),Fn.typeCheckConfig(St,t,this.constructor.DefaultType),t},t._getMenuElement=function(){if(!this._menu){var t=c._getParentFromElement(this._element);t&&(this._menu=t.querySelector(qt))}return this._menu},t._getPlacement=function(){var t=bt(this._element.parentNode),e=Bt;return t.hasClass(jt)?(e=Mt,bt(this._menu).hasClass(Rt)&&(e=Qt)):t.hasClass(Ht)?e=Yt:t.hasClass(Lt)?e=zt:bt(this._menu).hasClass(Rt)&&(e=Vt),e},t._detectNavbar=function(){return 0<bt(this._element).closest(".navbar").length},t._getPopperConfig=function(){var e=this,t={};"function"==typeof this._config.offset?t.fn=function(t){return t.offsets=l({},t.offsets,e._config.offset(t.offsets)||{}),t}:t.offset=this._config.offset;var n={placement:this._getPlacement(),modifiers:{offset:t,flip:{enabled:this._config.flip},preventOverflow:{boundariesElement:this._config.boundary}}};return"static"===this._config.display&&(n.modifiers.applyStyle={enabled:!1}),n},c._jQueryInterface=function(e){return this.each(function(){var t=bt(this).data(It);if(t||(t=new c(this,"object"==typeof e?e:null),bt(this).data(It,t)),"string"==typeof e){if("undefined"==typeof t[e])throw new TypeError('No method named "'+e+'"');t[e]()}})},c._clearMenus=function(t){if(!t||3!==t.which&&("keyup"!==t.type||9===t.which))for(var e=[].slice.call(document.querySelectorAll(Wt)),n=0,i=e.length;n<i;n++){var r=c._getParentFromElement(e[n]),o=bt(e[n]).data(It),s={relatedTarget:e[n]};if(t&&"click"===t.type&&(s.clickEvent=t),o){var a=o._menu;if(bt(r).hasClass(Pt)&&!(t&&("click"===t.type&&/input|textarea/i.test(t.target.tagName)||"keyup"===t.type&&9===t.which)&&bt.contains(r,t.target))){var l=bt.Event(Ot.HIDE,s);bt(r).trigger(l),l.isDefaultPrevented()||("ontouchstart"in document.documentElement&&bt(document.body).children().off("mouseover",null,bt.noop),e[n].setAttribute("aria-expanded","false"),bt(a).removeClass(Pt),bt(r).removeClass(Pt).trigger(bt.Event(Ot.HIDDEN,s)))}}}},c._getParentFromElement=function(t){var e,n=Fn.getSelectorFromElement(t);return n&&(e=document.querySelector(n)),e||t.parentNode},c._dataApiKeydownHandler=function(t){if((/input|textarea/i.test(t.target.tagName)?!(32===t.which||27!==t.which&&(40!==t.which&&38!==t.which||bt(t.target).closest(qt).length)):Nt.test(t.which))&&(t.preventDefault(),t.stopPropagation(),!this.disabled&&!bt(this).hasClass(kt))){var e=c._getParentFromElement(this),n=bt(e).hasClass(Pt);if((n||27===t.which&&32===t.which)&&(!n||27!==t.which&&32!==t.which)){var i=[].slice.call(e.querySelectorAll(Kt));if(0!==i.length){var r=i.indexOf(t.target);38===t.which&&0<r&&r--,40===t.which&&r<i.length-1&&r++,r<0&&(r=0),i[r].focus()}}else{if(27===t.which){var o=e.querySelector(Wt);bt(o).trigger("focus")}bt(this).trigger("click")}}},s(c,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return Jt}},{key:"DefaultType",get:function(){return Zt}}]),c}(),bt(document).on(Ot.KEYDOWN_DATA_API,Wt,Gt._dataApiKeydownHandler).on(Ot.KEYDOWN_DATA_API,qt,Gt._dataApiKeydownHandler).on(Ot.CLICK_DATA_API+" "+Ot.KEYUP_DATA_API,Gt._clearMenus).on(Ot.CLICK_DATA_API,Wt,function(t){t.preventDefault(),t.stopPropagation(),Gt._jQueryInterface.call(bt(this),"toggle")}).on(Ot.CLICK_DATA_API,Ut,function(t){t.stopPropagation()}),bt.fn[St]=Gt._jQueryInterface,bt.fn[St].Constructor=Gt,bt.fn[St].noConflict=function(){return bt.fn[St]=wt,Gt._jQueryInterface},Gt),Yn=(Xt="modal",ee="."+(te="bs.modal"),ne=($t=e).fn[Xt],ie={backdrop:!0,keyboard:!0,focus:!0,show:!0},re={backdrop:"(boolean|string)",keyboard:"boolean",focus:"boolean",show:"boolean"},oe={HIDE:"hide"+ee,HIDDEN:"hidden"+ee,SHOW:"show"+ee,SHOWN:"shown"+ee,FOCUSIN:"focusin"+ee,RESIZE:"resize"+ee,CLICK_DISMISS:"click.dismiss"+ee,KEYDOWN_DISMISS:"keydown.dismiss"+ee,MOUSEUP_DISMISS:"mouseup.dismiss"+ee,MOUSEDOWN_DISMISS:"mousedown.dismiss"+ee,CLICK_DATA_API:"click"+ee+".data-api"},se="modal-scrollbar-measure",ae="modal-backdrop",le="modal-open",ce="fade",he="show",ue=".modal-dialog",fe='[data-toggle="modal"]',de='[data-dismiss="modal"]',ge=".fixed-top, .fixed-bottom, .is-fixed, .sticky-top",_e=".sticky-top",me=function(){function r(t,e){this._config=this._getConfig(e),this._element=t,this._dialog=t.querySelector(ue),this._backdrop=null,this._isShown=!1,this._isBodyOverflowing=!1,this._ignoreBackdropClick=!1,this._scrollbarWidth=0}var t=r.prototype;return t.toggle=function(t){return this._isShown?this.hide():this.show(t)},t.show=function(t){var e=this;if(!this._isTransitioning&&!this._isShown){$t(this._element).hasClass(ce)&&(this._isTransitioning=!0);var n=$t.Event(oe.SHOW,{relatedTarget:t});$t(this._element).trigger(n),this._isShown||n.isDefaultPrevented()||(this._isShown=!0,this._checkScrollbar(),this._setScrollbar(),this._adjustDialog(),$t(document.body).addClass(le),this._setEscapeEvent(),this._setResizeEvent(),$t(this._element).on(oe.CLICK_DISMISS,de,function(t){return e.hide(t)}),$t(this._dialog).on(oe.MOUSEDOWN_DISMISS,function(){$t(e._element).one(oe.MOUSEUP_DISMISS,function(t){$t(t.target).is(e._element)&&(e._ignoreBackdropClick=!0)})}),this._showBackdrop(function(){return e._showElement(t)}))}},t.hide=function(t){var e=this;if(t&&t.preventDefault(),!this._isTransitioning&&this._isShown){var n=$t.Event(oe.HIDE);if($t(this._element).trigger(n),this._isShown&&!n.isDefaultPrevented()){this._isShown=!1;var i=$t(this._element).hasClass(ce);if(i&&(this._isTransitioning=!0),this._setEscapeEvent(),this._setResizeEvent(),$t(document).off(oe.FOCUSIN),$t(this._element).removeClass(he),$t(this._element).off(oe.CLICK_DISMISS),$t(this._dialog).off(oe.MOUSEDOWN_DISMISS),i){var r=Fn.getTransitionDurationFromElement(this._element);$t(this._element).one(Fn.TRANSITION_END,function(t){return e._hideModal(t)}).emulateTransitionEnd(r)}else this._hideModal()}}},t.dispose=function(){$t.removeData(this._element,te),$t(window,document,this._element,this._backdrop).off(ee),this._config=null,this._element=null,this._dialog=null,this._backdrop=null,this._isShown=null,this._isBodyOverflowing=null,this._ignoreBackdropClick=null,this._scrollbarWidth=null},t.handleUpdate=function(){this._adjustDialog()},t._getConfig=function(t){return t=l({},ie,t),Fn.typeCheckConfig(Xt,t,re),t},t._showElement=function(t){var e=this,n=$t(this._element).hasClass(ce);this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE||document.body.appendChild(this._element),this._element.style.display="block",this._element.removeAttribute("aria-hidden"),this._element.scrollTop=0,n&&Fn.reflow(this._element),$t(this._element).addClass(he),this._config.focus&&this._enforceFocus();var i=$t.Event(oe.SHOWN,{relatedTarget:t}),r=function(){e._config.focus&&e._element.focus(),e._isTransitioning=!1,$t(e._element).trigger(i)};if(n){var o=Fn.getTransitionDurationFromElement(this._element);$t(this._dialog).one(Fn.TRANSITION_END,r).emulateTransitionEnd(o)}else r()},t._enforceFocus=function(){var e=this;$t(document).off(oe.FOCUSIN).on(oe.FOCUSIN,function(t){document!==t.target&&e._element!==t.target&&0===$t(e._element).has(t.target).length&&e._element.focus()})},t._setEscapeEvent=function(){var e=this;this._isShown&&this._config.keyboard?$t(this._element).on(oe.KEYDOWN_DISMISS,function(t){27===t.which&&(t.preventDefault(),e.hide())}):this._isShown||$t(this._element).off(oe.KEYDOWN_DISMISS)},t._setResizeEvent=function(){var e=this;this._isShown?$t(window).on(oe.RESIZE,function(t){return e.handleUpdate(t)}):$t(window).off(oe.RESIZE)},t._hideModal=function(){var t=this;this._element.style.display="none",this._element.setAttribute("aria-hidden",!0),this._isTransitioning=!1,this._showBackdrop(function(){$t(document.body).removeClass(le),t._resetAdjustments(),t._resetScrollbar(),$t(t._element).trigger(oe.HIDDEN)})},t._removeBackdrop=function(){this._backdrop&&($t(this._backdrop).remove(),this._backdrop=null)},t._showBackdrop=function(t){var e=this,n=$t(this._element).hasClass(ce)?ce:"";if(this._isShown&&this._config.backdrop){if(this._backdrop=document.createElement("div"),this._backdrop.className=ae,n&&this._backdrop.classList.add(n),$t(this._backdrop).appendTo(document.body),$t(this._element).on(oe.CLICK_DISMISS,function(t){e._ignoreBackdropClick?e._ignoreBackdropClick=!1:t.target===t.currentTarget&&("static"===e._config.backdrop?e._element.focus():e.hide())}),n&&Fn.reflow(this._backdrop),$t(this._backdrop).addClass(he),!t)return;if(!n)return void t();var i=Fn.getTransitionDurationFromElement(this._backdrop);$t(this._backdrop).one(Fn.TRANSITION_END,t).emulateTransitionEnd(i)}else if(!this._isShown&&this._backdrop){$t(this._backdrop).removeClass(he);var r=function(){e._removeBackdrop(),t&&t()};if($t(this._element).hasClass(ce)){var o=Fn.getTransitionDurationFromElement(this._backdrop);$t(this._backdrop).one(Fn.TRANSITION_END,r).emulateTransitionEnd(o)}else r()}else t&&t()},t._adjustDialog=function(){var t=this._element.scrollHeight>document.documentElement.clientHeight;!this._isBodyOverflowing&&t&&(this._element.style.paddingLeft=this._scrollbarWidth+"px"),this._isBodyOverflowing&&!t&&(this._element.style.paddingRight=this._scrollbarWidth+"px")},t._resetAdjustments=function(){this._element.style.paddingLeft="",this._element.style.paddingRight=""},t._checkScrollbar=function(){var t=document.body.getBoundingClientRect();this._isBodyOverflowing=t.left+t.right<window.innerWidth,this._scrollbarWidth=this._getScrollbarWidth()},t._setScrollbar=function(){var r=this;if(this._isBodyOverflowing){var t=[].slice.call(document.querySelectorAll(ge)),e=[].slice.call(document.querySelectorAll(_e));$t(t).each(function(t,e){var n=e.style.paddingRight,i=$t(e).css("padding-right");$t(e).data("padding-right",n).css("padding-right",parseFloat(i)+r._scrollbarWidth+"px")}),$t(e).each(function(t,e){var n=e.style.marginRight,i=$t(e).css("margin-right");$t(e).data("margin-right",n).css("margin-right",parseFloat(i)-r._scrollbarWidth+"px")});var n=document.body.style.paddingRight,i=$t(document.body).css("padding-right");$t(document.body).data("padding-right",n).css("padding-right",parseFloat(i)+this._scrollbarWidth+"px")}},t._resetScrollbar=function(){var t=[].slice.call(document.querySelectorAll(ge));$t(t).each(function(t,e){var n=$t(e).data("padding-right");$t(e).removeData("padding-right"),e.style.paddingRight=n||""});var e=[].slice.call(document.querySelectorAll(""+_e));$t(e).each(function(t,e){var n=$t(e).data("margin-right");"undefined"!=typeof n&&$t(e).css("margin-right",n).removeData("margin-right")});var n=$t(document.body).data("padding-right");$t(document.body).removeData("padding-right"),document.body.style.paddingRight=n||""},t._getScrollbarWidth=function(){var t=document.createElement("div");t.className=se,document.body.appendChild(t);var e=t.getBoundingClientRect().width-t.clientWidth;return document.body.removeChild(t),e},r._jQueryInterface=function(n,i){return this.each(function(){var t=$t(this).data(te),e=l({},ie,$t(this).data(),"object"==typeof n&&n?n:{});if(t||(t=new r(this,e),$t(this).data(te,t)),"string"==typeof n){if("undefined"==typeof t[n])throw new TypeError('No method named "'+n+'"');t[n](i)}else e.show&&t.show(i)})},s(r,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return ie}}]),r}(),$t(document).on(oe.CLICK_DATA_API,fe,function(t){var e,n=this,i=Fn.getSelectorFromElement(this);i&&(e=document.querySelector(i));var r=$t(e).data(te)?"toggle":l({},$t(e).data(),$t(this).data());"A"!==this.tagName&&"AREA"!==this.tagName||t.preventDefault();var o=$t(e).one(oe.SHOW,function(t){t.isDefaultPrevented()||o.one(oe.HIDDEN,function(){$t(n).is(":visible")&&n.focus()})});me._jQueryInterface.call($t(e),r,this)}),$t.fn[Xt]=me._jQueryInterface,$t.fn[Xt].Constructor=me,$t.fn[Xt].noConflict=function(){return $t.fn[Xt]=ne,me._jQueryInterface},me),zn=(ve="tooltip",Ee="."+(ye="bs.tooltip"),Ce=(pe=e).fn[ve],Te="bs-tooltip",be=new RegExp("(^|\\s)"+Te+"\\S+","g"),Ae={animation:!0,template:'<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!(Ie={AUTO:"auto",TOP:"top",RIGHT:"right",BOTTOM:"bottom",LEFT:"left"}),selector:!(Se={animation:"boolean",template:"string",title:"(string|element|function)",trigger:"string",delay:"(number|object)",html:"boolean",selector:"(string|boolean)",placement:"(string|function)",offset:"(number|string)",container:"(string|element|boolean)",fallbackPlacement:"(string|array)",boundary:"(string|element)"}),placement:"top",offset:0,container:!1,fallbackPlacement:"flip",boundary:"scrollParent"},we="out",Ne={HIDE:"hide"+Ee,HIDDEN:"hidden"+Ee,SHOW:(De="show")+Ee,SHOWN:"shown"+Ee,INSERTED:"inserted"+Ee,CLICK:"click"+Ee,FOCUSIN:"focusin"+Ee,FOCUSOUT:"focusout"+Ee,MOUSEENTER:"mouseenter"+Ee,MOUSELEAVE:"mouseleave"+Ee},Oe="fade",ke="show",Pe=".tooltip-inner",je=".arrow",He="hover",Le="focus",Re="click",xe="manual",We=function(){function i(t,e){if("undefined"==typeof h)throw new TypeError("Bootstrap tooltips require Popper.js (https://popper.js.org)");this._isEnabled=!0,this._timeout=0,this._hoverState="",this._activeTrigger={},this._popper=null,this.element=t,this.config=this._getConfig(e),this.tip=null,this._setListeners()}var t=i.prototype;return t.enable=function(){this._isEnabled=!0},t.disable=function(){this._isEnabled=!1},t.toggleEnabled=function(){this._isEnabled=!this._isEnabled},t.toggle=function(t){if(this._isEnabled)if(t){var e=this.constructor.DATA_KEY,n=pe(t.currentTarget).data(e);n||(n=new this.constructor(t.currentTarget,this._getDelegateConfig()),pe(t.currentTarget).data(e,n)),n._activeTrigger.click=!n._activeTrigger.click,n._isWithActiveTrigger()?n._enter(null,n):n._leave(null,n)}else{if(pe(this.getTipElement()).hasClass(ke))return void this._leave(null,this);this._enter(null,this)}},t.dispose=function(){clearTimeout(this._timeout),pe.removeData(this.element,this.constructor.DATA_KEY),pe(this.element).off(this.constructor.EVENT_KEY),pe(this.element).closest(".modal").off("hide.bs.modal"),this.tip&&pe(this.tip).remove(),this._isEnabled=null,this._timeout=null,this._hoverState=null,(this._activeTrigger=null)!==this._popper&&this._popper.destroy(),this._popper=null,this.element=null,this.config=null,this.tip=null},t.show=function(){var e=this;if("none"===pe(this.element).css("display"))throw new Error("Please use show on visible elements");var t=pe.Event(this.constructor.Event.SHOW);if(this.isWithContent()&&this._isEnabled){pe(this.element).trigger(t);var n=pe.contains(this.element.ownerDocument.documentElement,this.element);if(t.isDefaultPrevented()||!n)return;var i=this.getTipElement(),r=Fn.getUID(this.constructor.NAME);i.setAttribute("id",r),this.element.setAttribute("aria-describedby",r),this.setContent(),this.config.animation&&pe(i).addClass(Oe);var o="function"==typeof this.config.placement?this.config.placement.call(this,i,this.element):this.config.placement,s=this._getAttachment(o);this.addAttachmentClass(s);var a=!1===this.config.container?document.body:pe(document).find(this.config.container);pe(i).data(this.constructor.DATA_KEY,this),pe.contains(this.element.ownerDocument.documentElement,this.tip)||pe(i).appendTo(a),pe(this.element).trigger(this.constructor.Event.INSERTED),this._popper=new h(this.element,i,{placement:s,modifiers:{offset:{offset:this.config.offset},flip:{behavior:this.config.fallbackPlacement},arrow:{element:je},preventOverflow:{boundariesElement:this.config.boundary}},onCreate:function(t){t.originalPlacement!==t.placement&&e._handlePopperPlacementChange(t)},onUpdate:function(t){e._handlePopperPlacementChange(t)}}),pe(i).addClass(ke),"ontouchstart"in document.documentElement&&pe(document.body).children().on("mouseover",null,pe.noop);var l=function(){e.config.animation&&e._fixTransition();var t=e._hoverState;e._hoverState=null,pe(e.element).trigger(e.constructor.Event.SHOWN),t===we&&e._leave(null,e)};if(pe(this.tip).hasClass(Oe)){var c=Fn.getTransitionDurationFromElement(this.tip);pe(this.tip).one(Fn.TRANSITION_END,l).emulateTransitionEnd(c)}else l()}},t.hide=function(t){var e=this,n=this.getTipElement(),i=pe.Event(this.constructor.Event.HIDE),r=function(){e._hoverState!==De&&n.parentNode&&n.parentNode.removeChild(n),e._cleanTipClass(),e.element.removeAttribute("aria-describedby"),pe(e.element).trigger(e.constructor.Event.HIDDEN),null!==e._popper&&e._popper.destroy(),t&&t()};if(pe(this.element).trigger(i),!i.isDefaultPrevented()){if(pe(n).removeClass(ke),"ontouchstart"in document.documentElement&&pe(document.body).children().off("mouseover",null,pe.noop),this._activeTrigger[Re]=!1,this._activeTrigger[Le]=!1,this._activeTrigger[He]=!1,pe(this.tip).hasClass(Oe)){var o=Fn.getTransitionDurationFromElement(n);pe(n).one(Fn.TRANSITION_END,r).emulateTransitionEnd(o)}else r();this._hoverState=""}},t.update=function(){null!==this._popper&&this._popper.scheduleUpdate()},t.isWithContent=function(){return Boolean(this.getTitle())},t.addAttachmentClass=function(t){pe(this.getTipElement()).addClass(Te+"-"+t)},t.getTipElement=function(){return this.tip=this.tip||pe(this.config.template)[0],this.tip},t.setContent=function(){var t=this.getTipElement();this.setElementContent(pe(t.querySelectorAll(Pe)),this.getTitle()),pe(t).removeClass(Oe+" "+ke)},t.setElementContent=function(t,e){var n=this.config.html;"object"==typeof e&&(e.nodeType||e.jquery)?n?pe(e).parent().is(t)||t.empty().append(e):t.text(pe(e).text()):t[n?"html":"text"](e)},t.getTitle=function(){var t=this.element.getAttribute("data-original-title");return t||(t="function"==typeof this.config.title?this.config.title.call(this.element):this.config.title),t},t._getAttachment=function(t){return Ie[t.toUpperCase()]},t._setListeners=function(){var i=this;this.config.trigger.split(" ").forEach(function(t){if("click"===t)pe(i.element).on(i.constructor.Event.CLICK,i.config.selector,function(t){return i.toggle(t)});else if(t!==xe){var e=t===He?i.constructor.Event.MOUSEENTER:i.constructor.Event.FOCUSIN,n=t===He?i.constructor.Event.MOUSELEAVE:i.constructor.Event.FOCUSOUT;pe(i.element).on(e,i.config.selector,function(t){return i._enter(t)}).on(n,i.config.selector,function(t){return i._leave(t)})}pe(i.element).closest(".modal").on("hide.bs.modal",function(){return i.hide()})}),this.config.selector?this.config=l({},this.config,{trigger:"manual",selector:""}):this._fixTitle()},t._fixTitle=function(){var t=typeof this.element.getAttribute("data-original-title");(this.element.getAttribute("title")||"string"!==t)&&(this.element.setAttribute("data-original-title",this.element.getAttribute("title")||""),this.element.setAttribute("title",""))},t._enter=function(t,e){var n=this.constructor.DATA_KEY;(e=e||pe(t.currentTarget).data(n))||(e=new this.constructor(t.currentTarget,this._getDelegateConfig()),pe(t.currentTarget).data(n,e)),t&&(e._activeTrigger["focusin"===t.type?Le:He]=!0),pe(e.getTipElement()).hasClass(ke)||e._hoverState===De?e._hoverState=De:(clearTimeout(e._timeout),e._hoverState=De,e.config.delay&&e.config.delay.show?e._timeout=setTimeout(function(){e._hoverState===De&&e.show()},e.config.delay.show):e.show())},t._leave=function(t,e){var n=this.constructor.DATA_KEY;(e=e||pe(t.currentTarget).data(n))||(e=new this.constructor(t.currentTarget,this._getDelegateConfig()),pe(t.currentTarget).data(n,e)),t&&(e._activeTrigger["focusout"===t.type?Le:He]=!1),e._isWithActiveTrigger()||(clearTimeout(e._timeout),e._hoverState=we,e.config.delay&&e.config.delay.hide?e._timeout=setTimeout(function(){e._hoverState===we&&e.hide()},e.config.delay.hide):e.hide())},t._isWithActiveTrigger=function(){for(var t in this._activeTrigger)if(this._activeTrigger[t])return!0;return!1},t._getConfig=function(t){return"number"==typeof(t=l({},this.constructor.Default,pe(this.element).data(),"object"==typeof t&&t?t:{})).delay&&(t.delay={show:t.delay,hide:t.delay}),"number"==typeof t.title&&(t.title=t.title.toString()),"number"==typeof t.content&&(t.content=t.content.toString()),Fn.typeCheckConfig(ve,t,this.constructor.DefaultType),t},t._getDelegateConfig=function(){var t={};if(this.config)for(var e in this.config)this.constructor.Default[e]!==this.config[e]&&(t[e]=this.config[e]);return t},t._cleanTipClass=function(){var t=pe(this.getTipElement()),e=t.attr("class").match(be);null!==e&&e.length&&t.removeClass(e.join(""))},t._handlePopperPlacementChange=function(t){var e=t.instance;this.tip=e.popper,this._cleanTipClass(),this.addAttachmentClass(this._getAttachment(t.placement))},t._fixTransition=function(){var t=this.getTipElement(),e=this.config.animation;null===t.getAttribute("x-placement")&&(pe(t).removeClass(Oe),this.config.animation=!1,this.hide(),this.show(),this.config.animation=e)},i._jQueryInterface=function(n){return this.each(function(){var t=pe(this).data(ye),e="object"==typeof n&&n;if((t||!/dispose|hide/.test(n))&&(t||(t=new i(this,e),pe(this).data(ye,t)),"string"==typeof n)){if("undefined"==typeof t[n])throw new TypeError('No method named "'+n+'"');t[n]()}})},s(i,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return Ae}},{key:"NAME",get:function(){return ve}},{key:"DATA_KEY",get:function(){return ye}},{key:"Event",get:function(){return Ne}},{key:"EVENT_KEY",get:function(){return Ee}},{key:"DefaultType",get:function(){return Se}}]),i}(),pe.fn[ve]=We._jQueryInterface,pe.fn[ve].Constructor=We,pe.fn[ve].noConflict=function(){return pe.fn[ve]=Ce,We._jQueryInterface},We),Jn=(qe="popover",Ke="."+(Fe="bs.popover"),Me=(Ue=e).fn[qe],Qe="bs-popover",Be=new RegExp("(^|\\s)"+Qe+"\\S+","g"),Ve=l({},zn.Default,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'}),Ye=l({},zn.DefaultType,{content:"(string|element|function)"}),ze="fade",Ze=".popover-header",Ge=".popover-body",$e={HIDE:"hide"+Ke,HIDDEN:"hidden"+Ke,SHOW:(Je="show")+Ke,SHOWN:"shown"+Ke,INSERTED:"inserted"+Ke,CLICK:"click"+Ke,FOCUSIN:"focusin"+Ke,FOCUSOUT:"focusout"+Ke,MOUSEENTER:"mouseenter"+Ke,MOUSELEAVE:"mouseleave"+Ke},Xe=function(t){var e,n;function i(){return t.apply(this,arguments)||this}n=t,(e=i).prototype=Object.create(n.prototype),(e.prototype.constructor=e).__proto__=n;var r=i.prototype;return r.isWithContent=function(){return this.getTitle()||this._getContent()},r.addAttachmentClass=function(t){Ue(this.getTipElement()).addClass(Qe+"-"+t)},r.getTipElement=function(){return this.tip=this.tip||Ue(this.config.template)[0],this.tip},r.setContent=function(){var t=Ue(this.getTipElement());this.setElementContent(t.find(Ze),this.getTitle());var e=this._getContent();"function"==typeof e&&(e=e.call(this.element)),this.setElementContent(t.find(Ge),e),t.removeClass(ze+" "+Je)},r._getContent=function(){return this.element.getAttribute("data-content")||this.config.content},r._cleanTipClass=function(){var t=Ue(this.getTipElement()),e=t.attr("class").match(Be);null!==e&&0<e.length&&t.removeClass(e.join(""))},i._jQueryInterface=function(n){return this.each(function(){var t=Ue(this).data(Fe),e="object"==typeof n?n:null;if((t||!/destroy|hide/.test(n))&&(t||(t=new i(this,e),Ue(this).data(Fe,t)),"string"==typeof n)){if("undefined"==typeof t[n])throw new TypeError('No method named "'+n+'"');t[n]()}})},s(i,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return Ve}},{key:"NAME",get:function(){return qe}},{key:"DATA_KEY",get:function(){return Fe}},{key:"Event",get:function(){return $e}},{key:"EVENT_KEY",get:function(){return Ke}},{key:"DefaultType",get:function(){return Ye}}]),i}(zn),Ue.fn[qe]=Xe._jQueryInterface,Ue.fn[qe].Constructor=Xe,Ue.fn[qe].noConflict=function(){return Ue.fn[qe]=Me,Xe._jQueryInterface},Xe),Zn=(en="scrollspy",rn="."+(nn="bs.scrollspy"),on=(tn=e).fn[en],sn={offset:10,method:"auto",target:""},an={offset:"number",method:"string",target:"(string|element)"},ln={ACTIVATE:"activate"+rn,SCROLL:"scroll"+rn,LOAD_DATA_API:"load"+rn+".data-api"},cn="dropdown-item",hn="active",un='[data-spy="scroll"]',fn=".active",dn=".nav, .list-group",gn=".nav-link",_n=".nav-item",mn=".list-group-item",pn=".dropdown",vn=".dropdown-item",yn=".dropdown-toggle",En="offset",Cn="position",Tn=function(){function n(t,e){var n=this;this._element=t,this._scrollElement="BODY"===t.tagName?window:t,this._config=this._getConfig(e),this._selector=this._config.target+" "+gn+","+this._config.target+" "+mn+","+this._config.target+" "+vn,this._offsets=[],this._targets=[],this._activeTarget=null,this._scrollHeight=0,tn(this._scrollElement).on(ln.SCROLL,function(t){return n._process(t)}),this.refresh(),this._process()}var t=n.prototype;return t.refresh=function(){var e=this,t=this._scrollElement===this._scrollElement.window?En:Cn,r="auto"===this._config.method?t:this._config.method,o=r===Cn?this._getScrollTop():0;this._offsets=[],this._targets=[],this._scrollHeight=this._getScrollHeight(),[].slice.call(document.querySelectorAll(this._selector)).map(function(t){var e,n=Fn.getSelectorFromElement(t);if(n&&(e=document.querySelector(n)),e){var i=e.getBoundingClientRect();if(i.width||i.height)return[tn(e)[r]().top+o,n]}return null}).filter(function(t){return t}).sort(function(t,e){return t[0]-e[0]}).forEach(function(t){e._offsets.push(t[0]),e._targets.push(t[1])})},t.dispose=function(){tn.removeData(this._element,nn),tn(this._scrollElement).off(rn),this._element=null,this._scrollElement=null,this._config=null,this._selector=null,this._offsets=null,this._targets=null,this._activeTarget=null,this._scrollHeight=null},t._getConfig=function(t){if("string"!=typeof(t=l({},sn,"object"==typeof t&&t?t:{})).target){var e=tn(t.target).attr("id");e||(e=Fn.getUID(en),tn(t.target).attr("id",e)),t.target="#"+e}return Fn.typeCheckConfig(en,t,an),t},t._getScrollTop=function(){return this._scrollElement===window?this._scrollElement.pageYOffset:this._scrollElement.scrollTop},t._getScrollHeight=function(){return this._scrollElement.scrollHeight||Math.max(document.body.scrollHeight,document.documentElement.scrollHeight)},t._getOffsetHeight=function(){return this._scrollElement===window?window.innerHeight:this._scrollElement.getBoundingClientRect().height},t._process=function(){var t=this._getScrollTop()+this._config.offset,e=this._getScrollHeight(),n=this._config.offset+e-this._getOffsetHeight();if(this._scrollHeight!==e&&this.refresh(),n<=t){var i=this._targets[this._targets.length-1];this._activeTarget!==i&&this._activate(i)}else{if(this._activeTarget&&t<this._offsets[0]&&0<this._offsets[0])return this._activeTarget=null,void this._clear();for(var r=this._offsets.length;r--;){this._activeTarget!==this._targets[r]&&t>=this._offsets[r]&&("undefined"==typeof this._offsets[r+1]||t<this._offsets[r+1])&&this._activate(this._targets[r])}}},t._activate=function(e){this._activeTarget=e,this._clear();var t=this._selector.split(",");t=t.map(function(t){return t+'[data-target="'+e+'"],'+t+'[href="'+e+'"]'});var n=tn([].slice.call(document.querySelectorAll(t.join(","))));n.hasClass(cn)?(n.closest(pn).find(yn).addClass(hn),n.addClass(hn)):(n.addClass(hn),n.parents(dn).prev(gn+", "+mn).addClass(hn),n.parents(dn).prev(_n).children(gn).addClass(hn)),tn(this._scrollElement).trigger(ln.ACTIVATE,{relatedTarget:e})},t._clear=function(){var t=[].slice.call(document.querySelectorAll(this._selector));tn(t).filter(fn).removeClass(hn)},n._jQueryInterface=function(e){return this.each(function(){var t=tn(this).data(nn);if(t||(t=new n(this,"object"==typeof e&&e),tn(this).data(nn,t)),"string"==typeof e){if("undefined"==typeof t[e])throw new TypeError('No method named "'+e+'"');t[e]()}})},s(n,null,[{key:"VERSION",get:function(){return"4.1.3"}},{key:"Default",get:function(){return sn}}]),n}(),tn(window).on(ln.LOAD_DATA_API,function(){for(var t=[].slice.call(document.querySelectorAll(un)),e=t.length;e--;){var n=tn(t[e]);Tn._jQueryInterface.call(n,n.data())}}),tn.fn[en]=Tn._jQueryInterface,tn.fn[en].Constructor=Tn,tn.fn[en].noConflict=function(){return tn.fn[en]=on,Tn._jQueryInterface},Tn),Gn=(In="."+(Sn="bs.tab"),An=(bn=e).fn.tab,Dn={HIDE:"hide"+In,HIDDEN:"hidden"+In,SHOW:"show"+In,SHOWN:"shown"+In,CLICK_DATA_API:"click"+In+".data-api"},wn="dropdown-menu",Nn="active",On="disabled",kn="fade",Pn="show",jn=".dropdown",Hn=".nav, .list-group",Ln=".active",Rn="> li > .active",xn='[data-toggle="tab"], [data-toggle="pill"], [data-toggle="list"]',Wn=".dropdown-toggle",Un="> .dropdown-menu .active",qn=function(){function i(t){this._element=t}var t=i.prototype;return t.show=function(){var n=this;if(!(this._element.parentNode&&this._element.parentNode.nodeType===Node.ELEMENT_NODE&&bn(this._element).hasClass(Nn)||bn(this._element).hasClass(On))){var t,i,e=bn(this._element).closest(Hn)[0],r=Fn.getSelectorFromElement(this._element);if(e){var o="UL"===e.nodeName?Rn:Ln;i=(i=bn.makeArray(bn(e).find(o)))[i.length-1]}var s=bn.Event(Dn.HIDE,{relatedTarget:this._element}),a=bn.Event(Dn.SHOW,{relatedTarget:i});if(i&&bn(i).trigger(s),bn(this._element).trigger(a),!a.isDefaultPrevented()&&!s.isDefaultPrevented()){r&&(t=document.querySelector(r)),this._activate(this._element,e);var l=function(){var t=bn.Event(Dn.HIDDEN,{relatedTarget:n._element}),e=bn.Event(Dn.SHOWN,{relatedTarget:i});bn(i).trigger(t),bn(n._element).trigger(e)};t?this._activate(t,t.parentNode,l):l()}}},t.dispose=function(){bn.removeData(this._element,Sn),this._element=null},t._activate=function(t,e,n){var i=this,r=("UL"===e.nodeName?bn(e).find(Rn):bn(e).children(Ln))[0],o=n&&r&&bn(r).hasClass(kn),s=function(){return i._transitionComplete(t,r,n)};if(r&&o){var a=Fn.getTransitionDurationFromElement(r);bn(r).one(Fn.TRANSITION_END,s).emulateTransitionEnd(a)}else s()},t._transitionComplete=function(t,e,n){if(e){bn(e).removeClass(Pn+" "+Nn);var i=bn(e.parentNode).find(Un)[0];i&&bn(i).removeClass(Nn),"tab"===e.getAttribute("role")&&e.setAttribute("aria-selected",!1)}if(bn(t).addClass(Nn),"tab"===t.getAttribute("role")&&t.setAttribute("aria-selected",!0),Fn.reflow(t),bn(t).addClass(Pn),t.parentNode&&bn(t.parentNode).hasClass(wn)){var r=bn(t).closest(jn)[0];if(r){var o=[].slice.call(r.querySelectorAll(Wn));bn(o).addClass(Nn)}t.setAttribute("aria-expanded",!0)}n&&n()},i._jQueryInterface=function(n){return this.each(function(){var t=bn(this),e=t.data(Sn);if(e||(e=new i(this),t.data(Sn,e)),"string"==typeof n){if("undefined"==typeof e[n])throw new TypeError('No method named "'+n+'"');e[n]()}})},s(i,null,[{key:"VERSION",get:function(){return"4.1.3"}}]),i}(),bn(document).on(Dn.CLICK_DATA_API,xn,function(t){t.preventDefault(),qn._jQueryInterface.call(bn(this),"show")}),bn.fn.tab=qn._jQueryInterface,bn.fn.tab.Constructor=qn,bn.fn.tab.noConflict=function(){return bn.fn.tab=An,qn._jQueryInterface},qn);!function(t){if("undefined"==typeof t)throw new TypeError("Bootstrap's JavaScript requires jQuery. jQuery must be included before Bootstrap's JavaScript.");var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1===e[0]&&9===e[1]&&e[2]<1||4<=e[0])throw new Error("Bootstrap's JavaScript requires at least jQuery v1.9.1 but less than v4.0.0")}(e),t.Util=Fn,t.Alert=Kn,t.Button=Mn,t.Carousel=Qn,t.Collapse=Bn,t.Dropdown=Vn,t.Modal=Yn,t.Popover=Jn,t.Scrollspy=Zn,t.Tab=Gn,t.Tooltip=zn,Object.defineProperty(t,"__esModule",{value:!0})});
//# sourceMappingURL=bootstrap.min.js.map
function resetSearch() {
    $('#skillsSearchInput').val('');
    $('#emptyResults').hide();
    $('.category-container, .skill-tag').show();
}

var deleteUserID;

jQuery(document).ready(function($){
    //open popup
    $('.cd-popup-trigger').on('click', function(event){
        event.preventDefault();
        $('.cd-popup').addClass('is-visible');
    });

    //close popup
    $('.cd-popup').on('click', function(event){
        if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
            event.preventDefault();
            $(this).removeClass('is-visible');
        }
    });
    //close popup when clicking the esc keyboard button
    $(document).keyup(function(event){
        if(event.which=='27'){
            $('.cd-popup').removeClass('is-visible');
        }
    });



    $('.header-profile').on('click','a', function(event){
        event.preventDefault();
        if($('.header-profile').find('.log-out-wrap').hasClass('opened-logout')){
            $('.header-profile').find('.log-out-wrap').removeClass('opened-logout');
        }else{
            $('.header-profile').find('.log-out-wrap').addClass('opened-logout');

        }

        return false;
    });


    // contact form animations
    // $('#contact').click(function() {
    //     $('#contactForm').fadeToggle();
    // })


        $('.clickable').click(function () {
            $(this).next('.sub-skills-table').toggle();
        });

        $('.res-main-cont').mouseover(function () {
            $('#downladContainerOverlay').show();
        }).mouseleave(function () {
            $('#downladContainerOverlay').hide();
        });

});

/*$('#contactForm').on('submit', function(e){
    e.preventDefault();
    //validacija

    //if success fade toggle
    $('#contactForm').fadeToggle();
    $('#sure').modal('show');

});*/

$('#sure_form').on('submit', function(e){
    e.preventDefault();
    console.log(e);
})

function zoom_image(img_url, template){
    $('.display-image').find('img').attr('src', img_url);
    $('.display-image').find('.display-form a').data('template', template);
    $('.display-image').css('display', 'table');
}
function zoom_image_hide(){
    $('.display-image').css('display', 'none');
}
function change_template(element){
    var template = $(element).data('template');
    $('.display-image').css('display', 'none');
    $('#template').modal('hide');
    $('#changerTemplate').modal('show');
}

function makeSelectable() {
    $('.list-group.checked-list-box .list-group-item').each(function () {

        // Settings
        var $widget = $(this),
            $checkbox = $('<input type="checkbox" class="hidden" />'),
            color = ($widget.data('color') ? $widget.data('color') : "primary"),
            style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        $widget.css('cursor', 'pointer')
        $widget.append($checkbox);

        // Event Handlers
        $widget.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });


        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $widget.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $widget.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$widget.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $widget.addClass(style + color + ' active');
            } else {
                $widget.removeClass(style + color + ' active');
            }
        }

        // Initialization
        function init() {

            if ($widget.data('checked') == true) {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
            }

            updateDisplay();

            // Inject the icon if applicable
            if ($widget.find('.state-icon').length == 0) {
                $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
            }
        }
        init();
    });
}

$(function () {
    $('#get-checked-data').on('click', function(event) {
        event.preventDefault();
        var checkedItems = {}, counter = 0;
        $("#check-list-box li.active").each(function(idx, li) {
            checkedItems[counter] = $(li).text();
            counter++;
        });
        $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
    });
});

var searchFilter = 'title';

$(document).ready(function () {

    // $('#birthday, #seniority').datepicker($.datepicker.regional[ "fr" ]);

// all input:text
    $('.row-border, .home-row-border').dblclick(function() {
        $(this).find('span').hide();
        $(this).find('input, select, .hide-from-form').show().focus();
    });

    $('.row-border > td > input, .home-row-border > td > input').blur(function () {
        $(this).hide();
        $(this).prev('span').show();
        var name = $(this).attr('name');
        var val = $(this).val();

        if((name === 'birthday' || name === 'seniority') && val.length) {
            var tmp = val.split('-');
            val = tmp[2] + '/' + tmp[1] + '/' + tmp[0];
        }

        $(this).prev('span').text(val);
    });
    //
// radio buttons
    $('.row-border-with-radiobox input').click(function () {
       $(this).parents('.hide-from-form').prev('span').text($(this).data('val')).show();
       $(this).parents('.hide-from-form').hide();
    });


// language selectbox
    $('#languageSelectbox').on('change blur', function () {
        $(this).prev('span').show().text($(this).find('option:selected').text());
        $(this).hide();
    });

    $('.image-de-profil').click(function () {
        $('.thumbnail-input').click();
    });

    $('.thumbnail-input').change(function () {
        $('.image-de-profil').css('background-image', 'none');
        $('#newImageUploadTitle').show();
    });

    $('.btn-form').click(function () {
        $(this).toggleClass('btn-ajouter');
        if($(this).hasClass('btn-ajouter')) {
            skillsVar.push($(this).data('id'));
        } else {
            skillsVar = skillsVar.filter(item => item !== $(this).data('id'));
        }
        $('#skill_ids').val(skillsVar);
        console.log(skillsVar);
    });

/*    $('.search-button').click(function (event){
        event.preventDefault();
       $.get('/skillsSearch', function (data) {
           console.log(data);
       });
    });*/

    $('.fa-trash-alt-custom').click(function () {
       var conf = confirm("Êtes-vous sûr de vouloir effacer toutes les compétences?");
       if(conf) {
           $('#clearSkills').submit();
       }
    });

    $('body').on('click', '.search-item', function () {
        var method;
        var id = $(this).data('id');
        method = $(this).hasClass('active') ? 'attachSkill' : 'detachSkill';
        $.get('/' + method + '/' + id, function () {
            $('#skill' + id).click();
        });
    });

    $('.search-close').click(function () {
        $('.search-results').hide();
    });


    $('#emptyResults').css('width', $('#skillsSearchInput').outerWidth() + $('.search-button').outerWidth() + 'px');

    // live search with new popup
    function skillsSearch() {
        var input = $('#skillsSearchInput');
        var container = $('#searchResults');
        var template = '';
        if(input.val().length >= 2) {
            $.get('employee/skillsSearch', {keyword: input.val()}, function (data) {
                $('.search-results').show();
                if(data.length) {
                    data.forEach(function (e) {
                        template += '<li class="list-group-item search-item" data-id="' + e.id + '" ' + (e.checked ? 'data-checked="true"' : '') + '> ' + e.title + '<span class="search-cat"> (' + e.category.title + ')</span></li>';
                    });
                    container.html(template);
                    makeSelectable();
                    $('#emptyResults').hide();
                } else {
                    container.html('');
                    $('#emptyResults').show();
                }

            });
        } else {
            $('.search-results').hide();
        }
    }

    function skillSearchFilter() {
        var keyword = $('#skillsSearchInput').val().toLowerCase();
        var hideContainer, anyMatch;
        if(keyword.length >= 2) {
            anyMatch = false;
            $('.category-container').each(function () {
                hideContainer = true;
                $(this).children('.skill-tag').each(function () {
                    if ($(this).data('title').indexOf(keyword) >= 0) {
                        hideContainer = false;
                        anyMatch = true;
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                if (hideContainer) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
            if(!anyMatch) {
                $('#emptyResults').show();
            } else {
                $('#emptyResults').hide();
            }
        } else {
            $('.category-container, .skill-tag').show();
        }
    }

    function adminSearch() {
        var keyword = $('#adminSearchInput').val().toLowerCase();
        var hideContainer, anyMatch;
        if(keyword.length >= 2) {
            anyMatch = false;
            $('.admin-search-container').each(function () {
                hideContainer = true;
                $(this).children('td.checkthis').each(function () {
                    if ($(this).data('title').indexOf(keyword) >= 0) {
                        hideContainer = false;
                        anyMatch = true;
                    }
                });
                if (hideContainer) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        } else {
            $('.admin-search-container').show();
        }
    }


    function saleSearch() {
        var keyword = $('#saleSearchInput').val().toLowerCase();
        var hideContainer, anyMatch;
        if(keyword.length >= 2) {
            anyMatch = false;
            $('.sale-search-container').each(function () {
                hideContainer = true;
                $(this).children('td.checkthis').each(function () {
                    if ($(this).data(searchFilter).indexOf(keyword) >= 0) {
                        hideContainer = false;
                        anyMatch = true;
                    }
                });
                if (hideContainer) {
                    $(this).hide();
                } else {
                    $(this).show();
                }
            });
        } else {
            $('.sale-search-container').show();
        }
    }

    var searchInterval;

    $('#skillsSearchInput').keyup(function () {
        clearTimeout(searchInterval);
        searchInterval = setTimeout(skillSearchFilter, 300);
    });

    $('#adminSearchInput').keyup(function () {
        clearTimeout(searchInterval);
        searchInterval = setTimeout(adminSearch, 300);
    });

    $('.sale-filter-btn').click(function () {
        $('.sale-filter-btn').removeClass('active');
        $(this).addClass('active');

        if($(this).index() === 0) {
            searchFilter = 'title';
        } else if($(this).index() === 1) {
            searchFilter = 'formations';
        } else {
            searchFilter = 'skills';
        }

        saleSearch();

    });

    $('#saleSearchInput').keyup(function () {
        clearTimeout(searchInterval);
        searchInterval = setTimeout(saleSearch, 300);
    });



});

/**
 * Croppr.js
 * https://github.com/jamesssooi/Croppr.js
 * 
 * A JavaScript image cropper that's lightweight, awesome, and has
 * zero dependencies.
 * 
 * (C) 2017 James Ooi. Released under the MIT License.
 */

(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
	typeof define === 'function' && define.amd ? define(factory) :
	(global.Croppr = factory());
}(this, (function () { 'use strict';

(function () {
  var lastTime = 0;
  var vendors = ['ms', 'moz', 'webkit', 'o'];
  for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }
  if (!window.requestAnimationFrame) window.requestAnimationFrame = function (callback, element) {
    var currTime = new Date().getTime();
    var timeToCall = Math.max(0, 16 - (currTime - lastTime));
    var id = window.setTimeout(function () {
      callback(currTime + timeToCall);
    }, timeToCall);
    lastTime = currTime + timeToCall;
    return id;
  };
  if (!window.cancelAnimationFrame) window.cancelAnimationFrame = function (id) {
    clearTimeout(id);
  };
})();
(function () {
  if (typeof window.CustomEvent === "function") return false;
  function CustomEvent(event, params) {
    params = params || { bubbles: false, cancelable: false, detail: undefined };
    var evt = document.createEvent('CustomEvent');
    evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);
    return evt;
  }
  CustomEvent.prototype = window.Event.prototype;
  window.CustomEvent = CustomEvent;
})();
(function (window) {
  try {
    new CustomEvent('test');
    return false;
  } catch (e) {}
  function MouseEvent(eventType, params) {
    params = params || { bubbles: false, cancelable: false };
    var mouseEvent = document.createEvent('MouseEvent');
    mouseEvent.initMouseEvent(eventType, params.bubbles, params.cancelable, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
    return mouseEvent;
  }
  MouseEvent.prototype = Event.prototype;
  window.MouseEvent = MouseEvent;
})(window);

var classCallCheck = function (instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
};

var createClass = function () {
  function defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  return function (Constructor, protoProps, staticProps) {
    if (protoProps) defineProperties(Constructor.prototype, protoProps);
    if (staticProps) defineProperties(Constructor, staticProps);
    return Constructor;
  };
}();







var get = function get(object, property, receiver) {
  if (object === null) object = Function.prototype;
  var desc = Object.getOwnPropertyDescriptor(object, property);

  if (desc === undefined) {
    var parent = Object.getPrototypeOf(object);

    if (parent === null) {
      return undefined;
    } else {
      return get(parent, property, receiver);
    }
  } else if ("value" in desc) {
    return desc.value;
  } else {
    var getter = desc.get;

    if (getter === undefined) {
      return undefined;
    }

    return getter.call(receiver);
  }
};

var inherits = function (subClass, superClass) {
  if (typeof superClass !== "function" && superClass !== null) {
    throw new TypeError("Super expression must either be null or a function, not " + typeof superClass);
  }

  subClass.prototype = Object.create(superClass && superClass.prototype, {
    constructor: {
      value: subClass,
      enumerable: false,
      writable: true,
      configurable: true
    }
  });
  if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass;
};











var possibleConstructorReturn = function (self, call) {
  if (!self) {
    throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
  }

  return call && (typeof call === "object" || typeof call === "function") ? call : self;
};





var slicedToArray = function () {
  function sliceIterator(arr, i) {
    var _arr = [];
    var _n = true;
    var _d = false;
    var _e = undefined;

    try {
      for (var _i = arr[Symbol.iterator](), _s; !(_n = (_s = _i.next()).done); _n = true) {
        _arr.push(_s.value);

        if (i && _arr.length === i) break;
      }
    } catch (err) {
      _d = true;
      _e = err;
    } finally {
      try {
        if (!_n && _i["return"]) _i["return"]();
      } finally {
        if (_d) throw _e;
      }
    }

    return _arr;
  }

  return function (arr, i) {
    if (Array.isArray(arr)) {
      return arr;
    } else if (Symbol.iterator in Object(arr)) {
      return sliceIterator(arr, i);
    } else {
      throw new TypeError("Invalid attempt to destructure non-iterable instance");
    }
  };
}();

var Handle =
/**
 * Creates a new Handle instance.
 * @constructor
 * @param {Array} position The x and y ratio position of the handle
 *      within the crop region. Accepts a value between 0 to 1 in the order
 *      of [X, Y].
 * @param {Array} constraints Define the side of the crop region that
 *      is to be affected by this handle. Accepts a value of 0 or 1 in the
 *      order of [TOP, RIGHT, BOTTOM, LEFT].
 * @param {String} cursor The CSS cursor of this handle.
 * @param {Element} eventBus The element to dispatch events to.
 */
function Handle(position, constraints, cursor, eventBus) {
  classCallCheck(this, Handle);
  var self = this;
  this.position = position;
  this.constraints = constraints;
  this.cursor = cursor;
  this.eventBus = eventBus;
  this.el = document.createElement('div');
  this.el.className = 'croppr-handle';
  this.el.style.cursor = cursor;
  this.el.addEventListener('mousedown', onMouseDown);
  function onMouseDown(e) {
    e.stopPropagation();
    document.addEventListener('mouseup', onMouseUp);
    document.addEventListener('mousemove', onMouseMove);
    self.eventBus.dispatchEvent(new CustomEvent('handlestart', {
      detail: { handle: self }
    }));
  }
  function onMouseUp(e) {
    e.stopPropagation();
    document.removeEventListener('mouseup', onMouseUp);
    document.removeEventListener('mousemove', onMouseMove);
    self.eventBus.dispatchEvent(new CustomEvent('handleend', {
      detail: { handle: self }
    }));
  }
  function onMouseMove(e) {
    e.stopPropagation();
    self.eventBus.dispatchEvent(new CustomEvent('handlemove', {
      detail: { mouseX: e.clientX, mouseY: e.clientY }
    }));
  }
};

var Box = function () {
  /**
   * Creates a new Box instance.
   * @constructor
   * @param {Number} x1
   * @param {Number} y1
   * @param {Number} x2
   * @param {Number} y2
   */
  function Box(x1, y1, x2, y2) {
    classCallCheck(this, Box);
    this.x1 = x1;
    this.y1 = y1;
    this.x2 = x2;
    this.y2 = y2;
  }
  /**
   * Sets the new dimensions of the box.
   * @param {Number} x1
   * @param {Number} y1
   * @param {Number} x2
   * @param {Number} y2
   */
  createClass(Box, [{
    key: 'set',
    value: function set$$1() {
      var x1 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      var y1 = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var x2 = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
      var y2 = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
      this.x1 = x1 == null ? this.x1 : x1;
      this.y1 = y1 == null ? this.y1 : y1;
      this.x2 = x2 == null ? this.x2 : x2;
      this.y2 = y2 == null ? this.y2 : y2;
      return this;
    }
    /**
     * Calculates the width of the box.
     * @returns {Number}
     */
  }, {
    key: 'width',
    value: function width() {
      return Math.abs(this.x2 - this.x1);
    }
    /**
     * Calculates the height of the box.
     * @returns {Number}
     */
  }, {
    key: 'height',
    value: function height() {
      return Math.abs(this.y2 - this.y1);
    }
    /**
     * Resizes the box to a new size.
     * @param {Number} newWidth
     * @param {Number} newHeight
     * @param {Array} [origin] The origin point to resize from.
     *      Defaults to [0, 0] (top left).
     */
  }, {
    key: 'resize',
    value: function resize(newWidth, newHeight) {
      var origin = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : [0, 0];
      var fromX = this.x1 + this.width() * origin[0];
      var fromY = this.y1 + this.height() * origin[1];
      this.x1 = fromX - newWidth * origin[0];
      this.y1 = fromY - newHeight * origin[1];
      this.x2 = this.x1 + newWidth;
      this.y2 = this.y1 + newHeight;
      return this;
    }
    /**
     * Scale the box by a factor.
     * @param {Number} factor
     * @param {Array} [origin] The origin point to resize from.
     *      Defaults to [0, 0] (top left).
     */
  }, {
    key: 'scale',
    value: function scale(factor) {
      var origin = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [0, 0];
      var newWidth = this.width() * factor;
      var newHeight = this.height() * factor;
      this.resize(newWidth, newHeight, origin);
      return this;
    }
  }, {
    key: 'move',
    value: function move() {
      var x = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      var y = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var width = this.width();
      var height = this.height();
      x = x === null ? this.x1 : x;
      y = y === null ? this.y1 : y;
      this.x1 = x;
      this.y1 = y;
      this.x2 = x + width;
      this.y2 = y + height;
      return this;
    }
    /**
     * Get relative x and y coordinates of a given point within the box.
     * @param {Array} point The x and y ratio position within the box.
     * @returns {Array} The x and y coordinates [x, y].
     */
  }, {
    key: 'getRelativePoint',
    value: function getRelativePoint() {
      var point = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [0, 0];
      var x = this.width() * point[0];
      var y = this.height() * point[1];
      return [x, y];
    }
    /**
     * Get absolute x and y coordinates of a given point within the box.
     * @param {Array} point The x and y ratio position within the box.
     * @returns {Array} The x and y coordinates [x, y].
     */
  }, {
    key: 'getAbsolutePoint',
    value: function getAbsolutePoint() {
      var point = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [0, 0];
      var x = this.x1 + this.width() * point[0];
      var y = this.y1 + this.height() * point[1];
      return [x, y];
    }
    /**
     * Constrain the box to a fixed ratio.
     * @param {Number} ratio
     * @param {Array} [origin] The origin point to resize from.
     *     Defaults to [0, 0] (top left).
     * @param {String} [grow] The axis to grow to maintain the ratio.
     *     Defaults to 'height'.
     */
  }, {
    key: 'constrainToRatio',
    value: function constrainToRatio(ratio) {
      var origin = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [0, 0];
      var grow = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 'height';
      if (ratio === null) {
        return;
      }
      var width = this.width();
      var height = this.height();
      switch (grow) {
        case 'height':
          this.resize(this.width(), this.width() * ratio, origin);
          break;
        case 'width':
          this.resize(this.height() * 1 / ratio, this.height(), origin);
          break;
        default:
          this.resize(this.width(), this.width() * ratio, origin);
      }
      return this;
    }
    /**
     * Constrain the box within a boundary.
     * @param {Number} boundaryWidth
     * @param {Number} boundaryHeight
     * @param {Array} [origin] The origin point to resize from.
     *     Defaults to [0, 0] (top left).
     */
  }, {
    key: 'constrainToBoundary',
    value: function constrainToBoundary(boundaryWidth, boundaryHeight) {
      var origin = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : [0, 0];
      var _getAbsolutePoint = this.getAbsolutePoint(origin),
          _getAbsolutePoint2 = slicedToArray(_getAbsolutePoint, 2),
          originX = _getAbsolutePoint2[0],
          originY = _getAbsolutePoint2[1];
      var maxIfLeft = originX;
      var maxIfTop = originY;
      var maxIfRight = boundaryWidth - originX;
      var maxIfBottom = boundaryHeight - originY;
      var directionX = -2 * origin[0] + 1;
      var directionY = -2 * origin[1] + 1;
      var maxWidth = null,
          maxHeight = null;
      switch (directionX) {
        case -1:
          maxWidth = maxIfLeft;break;
        case 0:
          maxWidth = Math.min(maxIfLeft, maxIfRight) * 2;break;
        case +1:
          maxWidth = maxIfRight;break;
      }
      switch (directionY) {
        case -1:
          maxHeight = maxIfTop;break;
        case 0:
          maxHeight = Math.min(maxIfTop, maxIfBottom) * 2;break;
        case +1:
          maxHeight = maxIfBottom;break;
      }
      if (this.width() > maxWidth) {
        var factor = maxWidth / this.width();
        this.scale(factor, origin);
      }
      if (this.height() > maxHeight) {
        var _factor = maxHeight / this.height();
        this.scale(_factor, origin);
      }
      return this;
    }
    /**
     * Constrain the box to a maximum/minimum size.
     * @param {Number} [maxWidth]
     * @param {Number} [maxHeight]
     * @param {Number} [minWidth]
     * @param {Number} [minHeight]
     * @param {Array} [origin] The origin point to resize from.
     *     Defaults to [0, 0] (top left).
     * @param {Number} [ratio] Ratio to maintain.
     */
  }, {
    key: 'constrainToSize',
    value: function constrainToSize() {
      var maxWidth = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      var maxHeight = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
      var minWidth = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : null;
      var minHeight = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : null;
      var origin = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : [0, 0];
      var ratio = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : null;
      if (ratio) {
        if (ratio > 1) {
          maxWidth = maxHeight * 1 / ratio;
          minHeight = minHeight * ratio;
        } else if (ratio < 1) {
          maxHeight = maxWidth * ratio;
          minWidth = minHeight * 1 / ratio;
        }
      }
      if (maxWidth && this.width() > maxWidth) {
        var newWidth = maxWidth,
            newHeight = ratio === null ? this.height() : maxHeight;
        this.resize(newWidth, newHeight, origin);
      }
      if (maxHeight && this.height() > maxHeight) {
        var _newWidth = ratio === null ? this.width() : maxWidth,
            _newHeight = maxHeight;
        this.resize(_newWidth, _newHeight, origin);
      }
      if (minWidth && this.width() < minWidth) {
        var _newWidth2 = minWidth,
            _newHeight2 = ratio === null ? this.height() : minHeight;
        this.resize(_newWidth2, _newHeight2, origin);
      }
      if (minHeight && this.height() < minHeight) {
        var _newWidth3 = ratio === null ? this.width() : minWidth,
            _newHeight3 = minHeight;
        this.resize(_newWidth3, _newHeight3, origin);
      }
      return this;
    }
  }]);
  return Box;
}();

/**
 * Binds an element's touch events to be simulated as mouse events.
 * @param {Element} element
 */
function enableTouch(element) {
  element.addEventListener('touchstart', simulateMouseEvent);
  element.addEventListener('touchend', simulateMouseEvent);
  element.addEventListener('touchmove', simulateMouseEvent);
}
/**
 * Translates a touch event to a mouse event.
 * @param {Event} e
 */
function simulateMouseEvent(e) {
  e.preventDefault();
  var touch = e.changedTouches[0];
  var eventMap = {
    'touchstart': 'mousedown',
    'touchmove': 'mousemove',
    'touchend': 'mouseup'
  };
  touch.target.dispatchEvent(new MouseEvent(eventMap[e.type], {
    bubbles: true,
    cancelable: true,
    view: window,
    clientX: touch.clientX,
    clientY: touch.clientY,
    screenX: touch.screenX,
    screenY: touch.screenY
  }));
}

/**
 * Define a list of handles to create.
 *
 * @property {Array} position - The x and y ratio position of the handle within
 *      the crop region. Accepts a value between 0 to 1 in the order of [X, Y].
 * @property {Array} constraints - Define the side of the crop region that is to
 *      be affected by this handle. Accepts a value of 0 or 1 in the order of
 *      [TOP, RIGHT, BOTTOM, LEFT].
 * @property {String} cursor - The CSS cursor of this handle.
 */
var HANDLES = [{ position: [0.0, 0.0], constraints: [1, 0, 0, 1], cursor: 'nw-resize' }, { position: [0.5, 0.0], constraints: [1, 0, 0, 0], cursor: 'n-resize' }, { position: [1.0, 0.0], constraints: [1, 1, 0, 0], cursor: 'ne-resize' }, { position: [1.0, 0.5], constraints: [0, 1, 0, 0], cursor: 'e-resize' }, { position: [1.0, 1.0], constraints: [0, 1, 1, 0], cursor: 'se-resize' }, { position: [0.5, 1.0], constraints: [0, 0, 1, 0], cursor: 's-resize' }, { position: [0.0, 1.0], constraints: [0, 0, 1, 1], cursor: 'sw-resize' }, { position: [0.0, 0.5], constraints: [0, 0, 0, 1], cursor: 'w-resize' }];
var CropprCore = function () {
  function CropprCore(element, options) {
    var _this = this;
    var deferred = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
    classCallCheck(this, CropprCore);
    this.options = CropprCore.parseOptions(options || {});
    if (!element.nodeName) {
      element = document.querySelector(element);
      if (element == null) {
        throw 'Unable to find element.';
      }
    }
    if (!element.getAttribute('src')) {
      throw 'Image src not provided.';
    }
    this._initialized = false;
    this._restore = {
      parent: element.parentNode,
      element: element
    };
    if (!deferred) {
      if (element.width === 0 || element.height === 0) {
        element.onload = function () {
          _this.initialize(element);
        };
      } else {
        this.initialize(element);
      }
    }
  }
  createClass(CropprCore, [{
    key: 'initialize',
    value: function initialize(element) {
      this.createDOM(element);
      this.options.convertToPixels(this.cropperEl);
      this.attachHandlerEvents();
      this.attachRegionEvents();
      this.attachOverlayEvents();
      this.box = this.initializeBox(this.options);
      this.redraw();
      this._initialized = true;
      if (this.options.onInitialize !== null) {
        this.options.onInitialize(this);
      }
    }
  }, {
    key: 'createDOM',
    value: function createDOM(targetEl) {
      this.containerEl = document.createElement('div');
      this.containerEl.className = 'croppr-container';
      this.eventBus = this.containerEl;
      enableTouch(this.containerEl);
      this.cropperEl = document.createElement('div');
      this.cropperEl.className = 'croppr';
      this.imageEl = document.createElement('img');
      this.imageEl.setAttribute('src', targetEl.getAttribute('src'));
      this.imageEl.setAttribute('alt', targetEl.getAttribute('alt'));
      this.imageEl.className = 'croppr-image';
      this.imageClippedEl = this.imageEl.cloneNode();
      this.imageClippedEl.className = 'croppr-imageClipped';
      this.regionEl = document.createElement('div');
      this.regionEl.className = 'croppr-region';
      this.overlayEl = document.createElement('div');
      this.overlayEl.className = 'croppr-overlay';
      var handleContainerEl = document.createElement('div');
      handleContainerEl.className = 'croppr-handleContainer';
      this.handles = [];
      for (var i = 0; i < HANDLES.length; i++) {
        var handle = new Handle(HANDLES[i].position, HANDLES[i].constraints, HANDLES[i].cursor, this.eventBus);
        this.handles.push(handle);
        handleContainerEl.appendChild(handle.el);
      }
      this.cropperEl.appendChild(this.imageEl);
      this.cropperEl.appendChild(this.imageClippedEl);
      this.cropperEl.appendChild(this.regionEl);
      this.cropperEl.appendChild(this.overlayEl);
      this.cropperEl.appendChild(handleContainerEl);
      this.containerEl.appendChild(this.cropperEl);
      targetEl.parentElement.replaceChild(this.containerEl, targetEl);
    }
    /**
     * Changes the image src.
     * @param {String} src
     */
  }, {
    key: 'setImage',
    value: function setImage(src) {
      var _this2 = this;
      this.imageEl.onload = function () {
        _this2.box = _this2.initializeBox(_this2.options);
        _this2.redraw();
      };
      this.imageEl.src = src;
      this.imageClippedEl.src = src;
      return this;
    }
  }, {
    key: 'destroy',
    value: function destroy() {
      this._restore.parent.replaceChild(this._restore.element, this.containerEl);
    }
    /**
     * Create a new box region with a set of options.
     * @param {Object} opts The options.
     * @returns {Box}
     */
  }, {
    key: 'initializeBox',
    value: function initializeBox(opts) {
      var width = opts.startSize.width;
      var height = opts.startSize.height;
      var box = new Box(0, 0, width, height);
      box.constrainToRatio(opts.aspectRatio, [0.5, 0.5]);
      var min = opts.minSize;
      var max = opts.maxSize;
      box.constrainToSize(max.width, max.height, min.width, min.height, [0.5, 0.5], opts.aspectRatio);
      var parentWidth = this.cropperEl.offsetWidth;
      var parentHeight = this.cropperEl.offsetHeight;
      box.constrainToBoundary(parentWidth, parentHeight, [0.5, 0.5]);
      var x = this.cropperEl.offsetWidth / 2 - box.width() / 2;
      var y = this.cropperEl.offsetHeight / 2 - box.height() / 2;
      box.move(x, y);
      return box;
    }
  }, {
    key: 'redraw',
    value: function redraw() {
      var _this3 = this;
      var width = Math.round(this.box.width()),
          height = Math.round(this.box.height()),
          x1 = Math.round(this.box.x1),
          y1 = Math.round(this.box.y1),
          x2 = Math.round(this.box.x2),
          y2 = Math.round(this.box.y2);
      window.requestAnimationFrame(function () {
        _this3.regionEl.style.transform = 'translate(' + x1 + 'px, ' + y1 + 'px)';
        _this3.regionEl.style.width = width + 'px';
        _this3.regionEl.style.height = height + 'px';
        _this3.imageClippedEl.style.clip = 'rect(' + y1 + 'px, ' + x2 + 'px, ' + y2 + 'px, ' + x1 + 'px)';
        var center = _this3.box.getAbsolutePoint([.5, .5]);
        var xSign = center[0] - _this3.cropperEl.offsetWidth / 2 >> 31;
        var ySign = center[1] - _this3.cropperEl.offsetHeight / 2 >> 31;
        var quadrant = (xSign ^ ySign) + ySign + ySign + 4;
        var foregroundHandleIndex = -2 * quadrant + 8;
        for (var i = 0; i < _this3.handles.length; i++) {
          var handle = _this3.handles[i];
          var handleWidth = handle.el.offsetWidth;
          var handleHeight = handle.el.offsetHeight;
          var left = x1 + width * handle.position[0] - handleWidth / 2;
          var top = y1 + height * handle.position[1] - handleHeight / 2;
          handle.el.style.transform = 'translate(' + Math.round(left) + 'px, ' + Math.round(top) + 'px)';
          handle.el.style.zIndex = foregroundHandleIndex == i ? 5 : 4;
        }
      });
    }
  }, {
    key: 'attachHandlerEvents',
    value: function attachHandlerEvents() {
      var eventBus = this.eventBus;
      eventBus.addEventListener('handlestart', this.onHandleMoveStart.bind(this));
      eventBus.addEventListener('handlemove', this.onHandleMoveMoving.bind(this));
      eventBus.addEventListener('handleend', this.onHandleMoveEnd.bind(this));
    }
  }, {
    key: 'attachRegionEvents',
    value: function attachRegionEvents() {
      var eventBus = this.eventBus;
      var self = this;
      this.regionEl.addEventListener('mousedown', onMouseDown);
      eventBus.addEventListener('regionstart', this.onRegionMoveStart.bind(this));
      eventBus.addEventListener('regionmove', this.onRegionMoveMoving.bind(this));
      eventBus.addEventListener('regionend', this.onRegionMoveEnd.bind(this));
      function onMouseDown(e) {
        e.stopPropagation();
        document.addEventListener('mouseup', onMouseUp);
        document.addEventListener('mousemove', onMouseMove);
        eventBus.dispatchEvent(new CustomEvent('regionstart', {
          detail: { mouseX: e.clientX, mouseY: e.clientY }
        }));
      }
      function onMouseMove(e) {
        e.stopPropagation();
        eventBus.dispatchEvent(new CustomEvent('regionmove', {
          detail: { mouseX: e.clientX, mouseY: e.clientY }
        }));
      }
      function onMouseUp(e) {
        e.stopPropagation();
        document.removeEventListener('mouseup', onMouseUp);
        document.removeEventListener('mousemove', onMouseMove);
        eventBus.dispatchEvent(new CustomEvent('regionend', {
          detail: { mouseX: e.clientX, mouseY: e.clientY }
        }));
      }
    }
  }, {
    key: 'attachOverlayEvents',
    value: function attachOverlayEvents() {
      var SOUTHEAST_HANDLE_IDX = 4;
      var self = this;
      var tmpBox = null;
      this.overlayEl.addEventListener('mousedown', onMouseDown);
      function onMouseDown(e) {
        e.stopPropagation();
        document.addEventListener('mouseup', onMouseUp);
        document.addEventListener('mousemove', onMouseMove);
        var container = self.cropperEl.getBoundingClientRect();
        var mouseX = e.clientX - container.left;
        var mouseY = e.clientY - container.top;
        tmpBox = self.box;
        self.box = new Box(mouseX, mouseY, mouseX + 1, mouseY + 1);
        self.eventBus.dispatchEvent(new CustomEvent('handlestart', {
          detail: { handle: self.handles[SOUTHEAST_HANDLE_IDX] }
        }));
      }
      function onMouseMove(e) {
        e.stopPropagation();
        self.eventBus.dispatchEvent(new CustomEvent('handlemove', {
          detail: { mouseX: e.clientX, mouseY: e.clientY }
        }));
      }
      function onMouseUp(e) {
        e.stopPropagation();
        document.removeEventListener('mouseup', onMouseUp);
        document.removeEventListener('mousemove', onMouseMove);
        if (self.box.width() === 1 && self.box.height() === 1) {
          self.box = tmpBox;
          return;
        }
        self.eventBus.dispatchEvent(new CustomEvent('handleend', {
          detail: { mouseX: e.clientX, mouseY: e.clientY }
        }));
      }
    }
  }, {
    key: 'onHandleMoveStart',
    value: function onHandleMoveStart(e) {
      var handle = e.detail.handle;
      var originPoint = [1 - handle.position[0], 1 - handle.position[1]];
      var _box$getAbsolutePoint = this.box.getAbsolutePoint(originPoint),
          _box$getAbsolutePoint2 = slicedToArray(_box$getAbsolutePoint, 2),
          originX = _box$getAbsolutePoint2[0],
          originY = _box$getAbsolutePoint2[1];
      this.activeHandle = { handle: handle, originPoint: originPoint, originX: originX, originY: originY };
      if (this.options.onCropStart !== null) {
        this.options.onCropStart(this.getValue());
      }
    }
  }, {
    key: 'onHandleMoveMoving',
    value: function onHandleMoveMoving(e) {
      var _e$detail = e.detail,
          mouseX = _e$detail.mouseX,
          mouseY = _e$detail.mouseY;
      var container = this.cropperEl.getBoundingClientRect();
      mouseX = mouseX - container.left;
      mouseY = mouseY - container.top;
      if (mouseX < 0) {
        mouseX = 0;
      } else if (mouseX > container.width) {
        mouseX = container.width;
      }
      if (mouseY < 0) {
        mouseY = 0;
      } else if (mouseY > container.height) {
        mouseY = container.height;
      }
      var origin = this.activeHandle.originPoint.slice();
      var originX = this.activeHandle.originX;
      var originY = this.activeHandle.originY;
      var handle = this.activeHandle.handle;
      var TOP_MOVABLE = handle.constraints[0] === 1;
      var RIGHT_MOVABLE = handle.constraints[1] === 1;
      var BOTTOM_MOVABLE = handle.constraints[2] === 1;
      var LEFT_MOVABLE = handle.constraints[3] === 1;
      var MULTI_AXIS = (LEFT_MOVABLE || RIGHT_MOVABLE) && (TOP_MOVABLE || BOTTOM_MOVABLE);
      var x1 = LEFT_MOVABLE || RIGHT_MOVABLE ? originX : this.box.x1;
      var x2 = LEFT_MOVABLE || RIGHT_MOVABLE ? originX : this.box.x2;
      var y1 = TOP_MOVABLE || BOTTOM_MOVABLE ? originY : this.box.y1;
      var y2 = TOP_MOVABLE || BOTTOM_MOVABLE ? originY : this.box.y2;
      x1 = LEFT_MOVABLE ? mouseX : x1;
      x2 = RIGHT_MOVABLE ? mouseX : x2;
      y1 = TOP_MOVABLE ? mouseY : y1;
      y2 = BOTTOM_MOVABLE ? mouseY : y2;
      var isFlippedX = false,
          isFlippedY = false;
      if (LEFT_MOVABLE || RIGHT_MOVABLE) {
        isFlippedX = LEFT_MOVABLE ? mouseX > originX : mouseX < originX;
      }
      if (TOP_MOVABLE || BOTTOM_MOVABLE) {
        isFlippedY = TOP_MOVABLE ? mouseY > originY : mouseY < originY;
      }
      if (isFlippedX) {
        var tmp = x1;x1 = x2;x2 = tmp;
        origin[0] = 1 - origin[0];
      }
      if (isFlippedY) {
        var _tmp = y1;y1 = y2;y2 = _tmp;
        origin[1] = 1 - origin[1];
      }
      var box = new Box(x1, y1, x2, y2);
      if (this.options.aspectRatio) {
        var ratio = this.options.aspectRatio;
        var isVerticalMovement = false;
        if (MULTI_AXIS) {
          isVerticalMovement = mouseY > box.y1 + ratio * box.width() || mouseY < box.y2 - ratio * box.width();
        } else if (TOP_MOVABLE || BOTTOM_MOVABLE) {
          isVerticalMovement = true;
        }
        var ratioMode = isVerticalMovement ? 'width' : 'height';
        box.constrainToRatio(ratio, origin, ratioMode);
      }
      var min = this.options.minSize;
      var max = this.options.maxSize;
      box.constrainToSize(max.width, max.height, min.width, min.height, origin, this.options.aspectRatio);
      var parentWidth = this.cropperEl.offsetWidth;
      var parentHeight = this.cropperEl.offsetHeight;
      box.constrainToBoundary(parentWidth, parentHeight, origin);
      this.box = box;
      this.redraw();
      if (this.options.onCropMove !== null) {
        this.options.onCropMove(this.getValue());
      }
    }
  }, {
    key: 'onHandleMoveEnd',
    value: function onHandleMoveEnd(e) {
      if (this.options.onCropEnd !== null) {
        this.options.onCropEnd(this.getValue());
      }
    }
  }, {
    key: 'onRegionMoveStart',
    value: function onRegionMoveStart(e) {
      var _e$detail2 = e.detail,
          mouseX = _e$detail2.mouseX,
          mouseY = _e$detail2.mouseY;
      var container = this.cropperEl.getBoundingClientRect();
      mouseX = mouseX - container.left;
      mouseY = mouseY - container.top;
      this.currentMove = {
        offsetX: mouseX - this.box.x1,
        offsetY: mouseY - this.box.y1
      };
      if (this.options.onCropStart !== null) {
        this.options.onCropStart(this.getValue());
      }
    }
  }, {
    key: 'onRegionMoveMoving',
    value: function onRegionMoveMoving(e) {
      var _e$detail3 = e.detail,
          mouseX = _e$detail3.mouseX,
          mouseY = _e$detail3.mouseY;
      var _currentMove = this.currentMove,
          offsetX = _currentMove.offsetX,
          offsetY = _currentMove.offsetY;
      var container = this.cropperEl.getBoundingClientRect();
      mouseX = mouseX - container.left;
      mouseY = mouseY - container.top;
      this.box.move(mouseX - offsetX, mouseY - offsetY);
      if (this.box.x1 < 0) {
        this.box.move(0, null);
      }
      if (this.box.x2 > container.width) {
        this.box.move(container.width - this.box.width(), null);
      }
      if (this.box.y1 < 0) {
        this.box.move(null, 0);
      }
      if (this.box.y2 > container.height) {
        this.box.move(null, container.height - this.box.height());
      }
      this.redraw();
      if (this.options.onCropMove !== null) {
        this.options.onCropMove(this.getValue());
      }
    }
  }, {
    key: 'onRegionMoveEnd',
    value: function onRegionMoveEnd(e) {
      if (this.options.onCropEnd !== null) {
        this.options.onCropEnd(this.getValue());
      }
    }
  }, {
    key: 'getValue',
    value: function getValue() {
      var mode = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
      if (mode === null) {
        mode = this.options.returnMode;
      }
      if (mode == 'real') {
        var actualWidth = this.imageEl.naturalWidth;
        var actualHeight = this.imageEl.naturalHeight;
        var _imageEl$getBoundingC = this.imageEl.getBoundingClientRect(),
            elementWidth = _imageEl$getBoundingC.width,
            elementHeight = _imageEl$getBoundingC.height;
        var factorX = actualWidth / elementWidth;
        var factorY = actualHeight / elementHeight;
        return {
          x: Math.round(this.box.x1 * factorX),
          y: Math.round(this.box.y1 * factorY),
          width: Math.round(this.box.width() * factorX),
          height: Math.round(this.box.height() * factorY)
        };
      } else if (mode == 'ratio') {
        var _imageEl$getBoundingC2 = this.imageEl.getBoundingClientRect(),
            _elementWidth = _imageEl$getBoundingC2.width,
            _elementHeight = _imageEl$getBoundingC2.height;
        return {
          x: round(this.box.x1 / _elementWidth, 3),
          y: round(this.box.y1 / _elementHeight, 3),
          width: round(this.box.width() / _elementWidth, 3),
          height: round(this.box.height() / _elementHeight, 3)
        };
      } else if (mode == 'raw') {
        return {
          x: Math.round(this.box.x1),
          y: Math.round(this.box.y1),
          width: Math.round(this.box.width()),
          height: Math.round(this.box.height())
        };
      }
    }
  }], [{
    key: 'parseOptions',
    value: function parseOptions(opts) {
      var defaults$$1 = {
        aspectRatio: null,
        maxSize: { width: null, height: null },
        minSize: { width: null, height: null },
        startSize: { width: 100, height: 100, unit: '%' },
        returnMode: 'real',
        onInitialize: null,
        onCropStart: null,
        onCropMove: null,
        onCropEnd: null
      };
      var aspectRatio = null;
      if (opts.aspectRatio !== undefined) {
        if (typeof opts.aspectRatio === 'number') {
          aspectRatio = opts.aspectRatio;
        } else if (opts.aspectRatio instanceof Array) {
          aspectRatio = opts.aspectRatio[1] / opts.aspectRatio[0];
        }
      }
      var maxSize = null;
      if (opts.maxSize !== undefined && opts.maxSize !== null) {
        maxSize = {
          width: opts.maxSize[0] || null,
          height: opts.maxSize[1] || null,
          unit: opts.maxSize[2] || 'px'
        };
      }
      var minSize = null;
      if (opts.minSize !== undefined && opts.minSize !== null) {
        minSize = {
          width: opts.minSize[0] || null,
          height: opts.minSize[1] || null,
          unit: opts.minSize[2] || 'px'
        };
      }
      var startSize = null;
      if (opts.startSize !== undefined && opts.startSize !== null) {
        startSize = {
          width: opts.startSize[0] || null,
          height: opts.startSize[1] || null,
          unit: opts.startSize[2] || '%'
        };
      }
      var onInitialize = null;
      if (typeof opts.onInitialize === 'function') {
        onInitialize = opts.onInitialize;
      }
      var onCropStart = null;
      if (typeof opts.onCropStart === 'function') {
        onCropStart = opts.onCropStart;
      }
      var onCropEnd = null;
      if (typeof opts.onCropEnd === 'function') {
        onCropEnd = opts.onCropEnd;
      }
      var onCropMove = null;
      if (typeof opts.onUpdate === 'function') {
        console.warn('Croppr.js: `onUpdate` is deprecated and will be removed in the next major release. Please use `onCropMove` or `onCropEnd` instead.');
        onCropMove = opts.onUpdate;
      }
      if (typeof opts.onCropMove === 'function') {
        onCropMove = opts.onCropMove;
      }
      var returnMode = null;
      if (opts.returnMode !== undefined) {
        var s = opts.returnMode.toLowerCase();
        if (['real', 'ratio', 'raw'].indexOf(s) === -1) {
          throw "Invalid return mode.";
        }
        returnMode = s;
      }
      var convertToPixels = function convertToPixels(container) {
        var width = container.offsetWidth;
        var height = container.offsetHeight;
        var sizeKeys = ['maxSize', 'minSize', 'startSize'];
        for (var i = 0; i < sizeKeys.length; i++) {
          var key = sizeKeys[i];
          if (this[key] !== null) {
            if (this[key].unit == '%') {
              if (this[key].width !== null) {
                this[key].width = this[key].width / 100 * width;
              }
              if (this[key].height !== null) {
                this[key].height = this[key].height / 100 * height;
              }
            }
            delete this[key].unit;
          }
        }
      };
      var defaultValue = function defaultValue(v, d) {
        return v !== null ? v : d;
      };
      return {
        aspectRatio: defaultValue(aspectRatio, defaults$$1.aspectRatio),
        maxSize: defaultValue(maxSize, defaults$$1.maxSize),
        minSize: defaultValue(minSize, defaults$$1.minSize),
        startSize: defaultValue(startSize, defaults$$1.startSize),
        returnMode: defaultValue(returnMode, defaults$$1.returnMode),
        onInitialize: defaultValue(onInitialize, defaults$$1.onInitialize),
        onCropStart: defaultValue(onCropStart, defaults$$1.onCropStart),
        onCropMove: defaultValue(onCropMove, defaults$$1.onCropMove),
        onCropEnd: defaultValue(onCropEnd, defaults$$1.onCropEnd),
        convertToPixels: convertToPixels
      };
    }
  }]);
  return CropprCore;
}();
function round(value, decimals) {
  return Number(Math.round(value + 'e' + decimals) + 'e-' + decimals);
}

var Croppr$1 = function (_CropprCore) {
  inherits(Croppr, _CropprCore);
  /**
   * @constructor
   * Calls the CropprCore's constructor.
   */
  function Croppr(element, options) {
    var _deferred = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
    classCallCheck(this, Croppr);
    return possibleConstructorReturn(this, (Croppr.__proto__ || Object.getPrototypeOf(Croppr)).call(this, element, options, _deferred));
  }
  /**
   * Gets the value of the crop region.
   * @param {String} [mode] Which mode of calculation to use: 'real', 'ratio' or
   *      'raw'.
   */
  createClass(Croppr, [{
    key: 'getValue',
    value: function getValue(mode) {
      return get(Croppr.prototype.__proto__ || Object.getPrototypeOf(Croppr.prototype), 'getValue', this).call(this, mode);
    }
    /**
     * Changes the image src.
     * @param {String} src
     */
  }, {
    key: 'setImage',
    value: function setImage(src) {
      return get(Croppr.prototype.__proto__ || Object.getPrototypeOf(Croppr.prototype), 'setImage', this).call(this, src);
    }
  }, {
    key: 'destroy',
    value: function destroy() {
      return get(Croppr.prototype.__proto__ || Object.getPrototypeOf(Croppr.prototype), 'destroy', this).call(this);
    }
    /**
     * Moves the crop region to a specified coordinate.
     * @param {Number} x
     * @param {Number} y
     */
  }, {
    key: 'moveTo',
    value: function moveTo(x, y) {
      this.box.move(x, y);
      this.redraw();
      if (this.options.onCropEnd !== null) {
        this.options.onCropEnd(this.getValue());
      }
      return this;
    }
    /**
     * Resizes the crop region to a specified width and height.
     * @param {Number} width
     * @param {Number} height
     * @param {Array} origin The origin point to resize from.
     *      Defaults to [0.5, 0.5] (center).
     */
  }, {
    key: 'resizeTo',
    value: function resizeTo(width, height) {
      var origin = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : [.5, .5];
      this.box.resize(width, height, origin);
      this.redraw();
      if (this.options.onCropEnd !== null) {
        this.options.onCropEnd(this.getValue());
      }
      return this;
    }
    /**
     * Scale the crop region by a factor.
     * @param {Number} factor
     * @param {Array} origin The origin point to resize from.
     *      Defaults to [0.5, 0.5] (center).
     */
  }, {
    key: 'scaleBy',
    value: function scaleBy(factor) {
      var origin = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [.5, .5];
      this.box.scale(factor, origin);
      this.redraw();
      if (this.options.onCropEnd !== null) {
        this.options.onCropEnd(this.getValue());
      }
      return this;
    }
  }, {
    key: 'reset',
    value: function reset() {
      this.box = this.initializeBox(this.options);
      this.redraw();
      if (this.options.onCropEnd !== null) {
        this.options.onCropEnd(this.getValue());
      }
      return this;
    }
  }]);
  return Croppr;
}(CropprCore);

return Croppr$1;

})));
