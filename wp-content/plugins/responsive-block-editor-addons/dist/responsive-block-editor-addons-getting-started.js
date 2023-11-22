!function(e){var t={};function a(r){if(t[r])return t[r].exports;var n=t[r]={i:r,l:!1,exports:{}};return e[r].call(n.exports,n,n.exports,a),n.l=!0,n.exports}a.m=e,a.c=t,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)a.d(r,n,function(t){return e[t]}.bind(null,n));return r},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="",a(a.s=415)}({0:function(e,t){e.exports=window.React},16:function(e,t){e.exports=window.ReactDOM},415:function(e,t,a){"use strict";a.r(t);var r=a(0),n=a.n(r),s=a(16),o=a.n(s),l=wp.i18n.__,c=[{title:l("Documentation & Changelog","responsive-block-editor-addons"),desc:l("Browse through the detailed documentation to know how to use the plugin.","responsive-block-editor-addons"),icon:"dashicons-media-document.svg",links:[{title:l("Docs","responsive-block-editor-addons"),url:"https://docs.cyberchimps.com/responsive-gutenberg-addons/"},{title:l("Changelog","responsive-block-editor-addons"),url:"https://cyberchimps.com/changelog/responsive-block-editor-addons/"}]},{title:l("Blocks Demo","responsive-block-editor-addons"),desc:l("View demos of the Gutenberg blocks to understand their usability.","responsive-block-editor-addons"),icon:"dashicons-welcome-view-site.svg",links:[{title:l("View Now","responsive-block-editor-addons"),url:"https://cyberchimps.com/blocks/"}]},{title:l("Video Resources","responsive-block-editor-addons"),desc:l("Check out the video resources to learn how to use the powerful plugin features.","responsive-block-editor-addons"),icon:"dashicons-youtube.svg",links:[{title:l("Watch Now","responsive-block-editor-addons"),url:"https://www.youtube.com/playlist?list=PLXTwxw3ZJwPSCqW__jo6fkUlEh2uXAsuF"}]},{title:l("Support","responsive-block-editor-addons"),desc:l("Got any questions, we are happy to help! Get in touch with our dedicated support team.","responsive-block-editor-addons"),icon:"dashicons-sos.svg",links:[{title:l("Request Support","responsive-block-editor-addons"),url:"https://wordpress.org/support/plugin/responsive-block-editor-addons/"}]},{title:l("Join Our Community","responsive-block-editor-addons"),desc:l("Join our community of Responsive users to create  websites! Say Hi, ask questions, and grow together.","responsive-block-editor-addons"),icon:"dashicons-groups.svg",links:[{title:l("Join Facebook Group","responsive-block-editor-addons"),url:"https://www.facebook.com/groups/responsive.theme"}]},{title:l("Rate Us","responsive-block-editor-addons"),desc:l("Your feedback is invaluable to us, and we greatly appreciate each and every review you provide.","responsive-block-editor-addons"),icon:"dashicons-thumbs-up.svg",links:[{title:l("Submit Review","responsive-block-editor-addons"),url:"https://wordpress.org/support/plugin/responsive-block-editor-addons/reviews/#new-post"}]}],i=[{key:"all",title:"All"},{key:"content",title:"Content"},{key:"timelines",title:"Timelines"},{key:"cro",title:"CRO"}];function d(e,t){var a=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),a.push.apply(a,r)}return a}function u(e){for(var t=1;t<arguments.length;t++){var a=null!=arguments[t]?arguments[t]:{};t%2?d(Object(a),!0).forEach((function(t){m(e,t,a[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(a)):d(Object(a)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(a,t))}))}return e}function m(e,t,a){return t in e?Object.defineProperty(e,t,{value:a,enumerable:!0,configurable:!0,writable:!0}):e[t]=a,e}function b(e,t,a,r,n,s,o){try{var l=e[s](o),c=l.value}catch(e){return void a(e)}l.done?t(c):Promise.resolve(c).then(r,n)}function p(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var a=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null==a)return;var r,n,s=[],o=!0,l=!1;try{for(a=a.call(e);!(o=(r=a.next()).done)&&(s.push(r.value),!t||s.length!==t);o=!0);}catch(e){l=!0,n=e}finally{try{o||null==a.return||a.return()}finally{if(l)throw n}}return s}(e,t)||function(e,t){if(!e)return;if("string"==typeof e)return v(e,t);var a=Object.prototype.toString.call(e).slice(8,-1);"Object"===a&&e.constructor&&(a=e.constructor.name);if("Map"===a||"Set"===a)return Array.from(e);if("Arguments"===a||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(a))return v(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function v(e,t){(null==t||t>e.length)&&(t=e.length);for(var a=0,r=new Array(t);a<t;a++)r[a]=e[a];return r}var g=wp.i18n.__,f=function(){var e=p(Object(r.useState)(window.location.hash.substring(1)),2),t=e[0],a=e[1],s=p(Object(r.useState)("all"),2),o=s[0],l=s[1];return window.location.hash=t,""===t&&(window.location.hash="#blocks",a("blocks")),n.a.createElement("div",{className:"rbea-getting-started-page"},n.a.createElement(x,null),n.a.createElement("div",{className:"rbea-tabs-section"},n.a.createElement("div",{className:"rbea-tabs"},n.a.createElement(k,{hash:t,setHash:a}))),n.a.createElement("div",{className:"rbea-tabs-content"},n.a.createElement("div",{className:"rbea-tabs-inner-content",style:"templates"==t?{backgroundImage:"url("+rbealocalize.responsiveurl+"admin/images/rst-template-preview.jpg)"}:{backgroundImage:"none"}},n.a.createElement("div",{className:"rbea-blocks-content rbea-tab-content",style:"blocks"==t?{display:"block"}:{display:"none"},id:"rbea_blocks"},"blocks"==t&&n.a.createElement(E,{showCategory:o,setShowCategory:l})),n.a.createElement("div",{className:"rbea-templates-content rbea-tab-content",style:"templates"==t?{display:"block"}:{display:"none"},id:"rbea_templates"},"templates"==t&&n.a.createElement(y,null)),n.a.createElement("div",{className:"rbea-help-content rbea-tab-content",style:"help"==t?{display:"block"}:{display:"none"},id:"rbea_help"},"help"==t&&n.a.createElement(h,null)))),n.a.createElement(O,null))},k=function(e){var t=e.hash,a=e.setHash;return n.a.createElement(n.a.Fragment,null,["blocks","templates","help"].map((function(e){return n.a.createElement(n.a.Fragment,null,n.a.createElement("div",{className:"rbea-tab rbea-templates-tab "+(t==e||""==t?"rbea-active-tab":""),"data-tab":"blocks",onClick:function(){return a(e)}},n.a.createElement("p",{className:"rbea-tab-name"},g("templates"==e?"Starter Templates":e.charAt(0).toUpperCase()+e.slice(1),"responsive-block-editor-addons"))))})))},h=function(){return n.a.createElement("div",{className:"container"},n.a.createElement("div",{className:"row gy-4"},c.map((function(e){return n.a.createElement("div",{className:"col-xl-4 col-lg-6 col-md-6"},n.a.createElement("div",{className:"rbea-help-feature-cards h-100"},n.a.createElement("div",{className:"row"},n.a.createElement("div",{className:"col-md-2"},n.a.createElement("img",{src:rbealocalize.responsiveurl+"/admin/images/"+e.icon})),n.a.createElement("div",{className:"col-md-10"},n.a.createElement("p",{className:"rbea-help-title"},e.title),n.a.createElement("p",{className:"rbea-help-desc"},e.desc),e.links.map((function(t,a){return n.a.createElement(n.a.Fragment,null,n.a.createElement("a",{className:"rbea-help-links",href:t.url,target:"_blank"},t.title),a<e.links.length-1?n.a.createElement("span",{className:"rbea-help-links-divider"},"|"):null)}))))))}))))},y=function(){Object(r.useEffect)((function(){"activated"==rbealocalize.rst_status&&(window.location.href=rbealocalize.rst_redirect)}),[]);var e=p(Object(r.useState)("install"===rbealocalize.rst_status?"Install & Activate":rbealocalize.rst_status.charAt(0).toUpperCase()+rbealocalize.rst_status.slice(1)),2),t=e[0],a=e[1],s=p(Object(r.useState)("rbea-install-plugin install-now button"),2),o=(s[0],s[1]),l=function(e){e.preventDefault();var t=e.target,r=t.getAttribute("data-slug"),n=t.getAttribute("href"),s=t.dataset.redirect;a(rbealocalize.installing+"..."),o("rbea-install-plugin install-now button updating-message"),wp.updates.installPlugin({slug:r,success:function(){a(rbealocalize.activating+"..."),o("rbea-install-plugin install-now button updating-message"),i(n,s)}})},c=function(e){e.preventDefault;var t=e.target,r=(t.getAttribute("data-slug"),t.getAttribute("href")),n=t.dataset.redirect;a(rbealocalize.activating+"..."),i(r,n)},i=function(e,t){void 0!==e&&e&&fetch(e,{method:"GET"}).then((function(e){if(!e.ok)throw new Error("Network response was not ok");return e.text()})).then((function(e){void 0!==t&&""!==t?window.location.replace(t):window.location.reload()})).catch((function(e){console.log(e)}))};return n.a.createElement("div",{className:"container"},n.a.createElement("div",{className:"row"},n.a.createElement("div",{className:"col-md-8 offset-md-2 col-12"},n.a.createElement("div",{className:"rbea-rst-content"},n.a.createElement("div",{className:"rbea-text-content text-center"},n.a.createElement("img",{className:"rbea-responsive-logo rounded mx-auto d-block",src:rbealocalize.responsiveurl+"admin/images/responsive-starter-templates-thumbnail.png",alt:""}),n.a.createElement("div",{className:"rbea-brand-text mt-4"},n.a.createElement("p",{className:"rbea-rst-brand-name"},g("Responsive Starter Templates","responsive-block-editor-addons")),n.a.createElement("p",{className:"rbea-rst-brand-desc"},g("Browse 150+ fully-functional ready site templates by installing the free Responsive Starter Templates plugin. Click the button below to get started.","responsive-block-editor-addons"))),n.a.createElement("div",{className:"rbea-rst-button-section"},function(e,a,r){switch(e){case"install":return n.a.createElement("div",{class:"plugin-card-responsive-add-ons",style:{padding:"8px 0 5px"}},n.a.createElement("a",{id:"rbea-rst","data-redirect":a,"data-slug":"responsive-add-ons",className:"rbea-install-plugin install-now button",href:r,"data-name":"responsive-add-ons","aria-label":"Install responsive-add-ons",onClick:l},g(t,"responsive-add-ons")));case"activate":return n.a.createElement("div",{class:"plugin-card-responsive-add-ons",style:{padding:"8px 0 5px"}},n.a.createElement("a",{"data-redirect":a,"data-slug":"responsive-add-ons",className:"rbea-activate-plugin activate-now button button-primary",href:r,"aria-label":"Activate responsive-add-ons",onClick:c},g(t,"responsive-add-ons")));case"activated":return n.a.createElement("div",{class:"plugin-card-responsive-add-ons",style:{padding:"8px 0 5px"}},n.a.createElement("button",{className:"rbea-plugin-activated-button-disabled button","aria-label":"Activated responsive-add-ons"},g("Activated","responsive-add-ons")))}}(rbealocalize.rst_status,rbealocalize.rst_redirect,rbealocalize.rst_nonce),n.a.createElement("div",{className:"rbea-rst-learn-more"},n.a.createElement("a",{href:rbealocalize.rst_url,target:"_blank"},g("Learn More","responsive-block-editor-addons")))))))))},E=function(e){var t=e.showCategory,a=e.setShowCategory,s=p(Object(r.useState)(rbealocalize.rbea_blocks),2),o=s[0],l=s[1],c=p(Object(r.useState)(""),2),d=c[0],m=c[1],v=o.every((function(e){return 1==e.status})),f=p(Object(r.useState)(v),2),k=f[0],h=f[1],y=p(Object(r.useState)(!1),2),E=y[0],N=y[1],x=function(e,t){Toastify({text:e,duration:3e3,gravity:"top",position:"center",stopOnFocus:!0,offset:{x:0,y:30},style:{background:"error"===t?"#FF5151":"#00CF21"}}).showToast()},O=function(){var e,t=(e=regeneratorRuntime.mark((function e(t){var a,r;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return(a=new FormData).append("action","rbea_blocks_toggle"),a.append("nonce",rbealocalize.nonce),a.append("value",JSON.stringify(t)),e.next=6,fetch(rbealocalize.ajaxurl,{method:"POST",body:a});case 6:return 200===(r=e.sent).status?x("Settings Saved","success"):x("Error","error"),e.abrupt("return",r.json());case 9:case"end":return e.stop()}}),e)})),function(){var t=this,a=arguments;return new Promise((function(r,n){var s=e.apply(t,a);function o(e){b(s,r,n,o,l,"next",e)}function l(e){b(s,r,n,o,l,"throw",e)}o(void 0)}))});return function(e){return t.apply(this,arguments)}}();return Object(r.useState)((function(){N(!0)}),[]),n.a.createElement("div",{className:"container"},n.a.createElement("div",{className:"row"},n.a.createElement("div",{className:"col-lg-9"},n.a.createElement("div",{className:"rbea-blocks-list"},n.a.createElement("p",null,i.map((function(e,r){return n.a.createElement(n.a.Fragment,null,n.a.createElement("span",{className:"rbea-blocks-category rbea-blocks-tab pointer "+(t==e.key?"rbea-active-blocks-category":""),id:e.key,onClick:function(){a(e.key),m("")}},g(e.title,"responsive-block-editor-addons")),r<i.length-1?n.a.createElement("span",{className:"rbea-blocks-category mx-lg-3 mx-sm-2 mx-2"},"|"):"")}))))),n.a.createElement("div",{className:"col-lg-3 text-center"},n.a.createElement("div",{className:"rbea-blocks-search-box"},n.a.createElement("input",{type:"text",id:"rbea-input-search-blocks",autocomplete:"off",placeholder:g("Search Blocks","responsive-block-editor-addons"),onChange:function(e){return m(e.target.value)},value:d}),n.a.createElement("i",{className:"rbea-blocks-search-icon"},n.a.createElement("span",{className:"dashicons dashicons-search"}))))),n.a.createElement("div",{className:"row"},n.a.createElement("div",{className:"col-md-12 my-5"},n.a.createElement("div",{className:"row"},n.a.createElement("div",{className:"rbea-blocks-toggle-all-blocks-section d-flex justify-content-center"},n.a.createElement("div",{className:"rbea-blocks-toggle-all-text-content"},n.a.createElement("p",{className:"rbea-blocks-toogle-block-title text-center"},g("Toggle All Blocks","responsive-block-editor-addons")),n.a.createElement("p",{className:"rbea-blocks-toogle-block-desc text-center"},g("You can disable some blocks for faster page speed.","responsive-block-editor-addons"))),n.a.createElement("div",{className:"rbea-blocks-toggle-block-switch"},n.a.createElement("label",{className:"rbea-blocks-switch mt-2"},n.a.createElement("input",{id:"rbea-blocks-toggle-blocks",type:"checkbox",onChange:function(e){return h(!k),void l((function(e){var t=e.map((function(e){return u(u({},e),{},{status:!k})}));return O(t),t}))},checked:k}),n.a.createElement("span",{className:"rbea-blocks-slider rbea-blocks-round"}))))))),n.a.createElement("div",{className:"row rbea-block-cards-group"},n.a.createElement(w,{blockList:o,setBlockList:l,showCategory:t,search:d,handleToggle:function(e){l((function(t){var a=t.map((function(t){return t.key===e?u(u({},t),{},{status:!t.status}):t})),r=a.every((function(e){return 1==e.status}));return h(r),E&&O(a),a}))}})))},w=function(e){var t=e.blockList,a=e.showCategory,r=e.search,s=e.handleToggle;return t.map((function(e,o){return n.a.createElement(n.a.Fragment,null,""==r?n.a.createElement(n.a.Fragment,null,(e.category==a||"all"==a)&&n.a.createElement(N,{blockList:t,handleToggle:s,category:e.category,title:e.title,docs:e.docs,demo:e.demo,status:e.status,index:o,blockKey:e.key})):n.a.createElement(n.a.Fragment,null,e.title.toLowerCase().includes(r)&&n.a.createElement(N,{blockList:t,handleToggle:s,category:e.category,title:e.title,docs:e.docs,demo:e.demo,status:e.status,index:o,blockKey:e.key})))}))},N=function(e){var t=e.handleToggle,a=e.category,r=e.title,s=e.docs,o=e.demo,l=e.status,c=e.index,i=e.blockKey;return n.a.createElement("div",{className:"col-lg-4 col-md-4 gy-3 rbea-block-category-card rbea-block-category-"+a},n.a.createElement("div",{className:"rbea-blocks-card d-flex justify-content-between h-100"},n.a.createElement("div",{className:"rbea-blocks-card-text-content"},n.a.createElement("div",{className:"rbea-blocks-card-title"},n.a.createElement("p",null,g(r,"responsive-block-editor-addons")))),n.a.createElement("div",{className:"rbea-blocks-card-switch align-self-center"},n.a.createElement("a",{className:"rbea-blocks-docs-demo-links",href:s,target:"_blank"},n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/icon-article.svg",alt:"icon-article"}))," ",n.a.createElement("a",{className:"rbea-blocks-docs-demo-links",href:o,target:"_blank"},n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/icon-demo.svg",alt:"icon-demo"}))," ",n.a.createElement("label",{className:"rbea-blocks-switch"},n.a.createElement("input",{className:"rbea-blocks-input-checkbox","data-index":c,type:"checkbox",id:i,checked:l,onChange:function(){return t(i)}}),n.a.createElement("span",{className:"rbea-blocks-slider rbea-blocks-round"})))))},x=function(){return n.a.createElement("div",{className:"rbea-header"},n.a.createElement("div",{className:"rbea-brand"},n.a.createElement("img",{className:"rbea-logo",src:rbealocalize.responsiveurl+"admin/images/responsive-block-editor-addons-thumbnail.png",alt:"responsive-thumbnail"}),n.a.createElement("h1",{className:"rbea-brand-name"},g("Responsive Blocks","responsive-block-editor-addons")),n.a.createElement("div",{className:"rbea-version"},rbealocalize.rbea_version)),n.a.createElement("p",{className:"rbea-brand-desc"},g("Thank You For Choosing Responsive Blocks – WordPress Gutenberg Blocks Plugin","responsive-block-editor-addons")))},O=function(){return n.a.createElement("div",{className:"rbea-footer"},n.a.createElement("div",{className:"rbea-footer-details"},n.a.createElement("div",{className:"rbea-footer-text"},n.a.createElement("p",{className:"rbea-footer-text-line"},g("If you like","responsive-block-editor-addons"),n.a.createElement("span",{className:"rbea-footer-brand-name"}," ",g("Responsive Blocks","responsive-block-editor-addons")),", ",n.a.createElement("br",{className:"rbea-mobile-line-break"}),g("please leave us a ","responsive-block-editor-addons"),n.a.createElement("a",{href:rbealocalize.review_link,target:"_blank",className:"rbea-star-rating"},n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/ph_star-fill.svg"}),n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/ph_star-fill.svg"}),n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/ph_star-fill.svg"}),n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/ph_star-fill.svg"}),n.a.createElement("img",{src:rbealocalize.responsiveurl+"admin/images/ph_star-fill.svg"})),g(" rating. Thank you!","responsive-block-editor-addons"))),n.a.createElement("div",{className:"rbea-hr"})),n.a.createElement("img",{className:"rbea-cyberchimps-logo",src:rbealocalize.responsiveurl+"admin/images/cyberchimps-logo.png"}))};document.addEventListener("DOMContentLoaded",(function(){var e=document.getElementById("rbea-getting-started-page-app");null!=e&&o.a.render(n.a.createElement(f,null),e)}))}});