!function(t){var e={};function r(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=t,r.c=e,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=12)}([function(t,e){t.exports=window.wp.element},function(t,e){t.exports=window.wp.i18n},function(t,e){t.exports=window.wp.blocks},function(t,e,r){var n=r(7),o=r(8),c=r(9),a=r(11);t.exports=function(t,e){return n(t)||o(t,e)||c(t,e)||a()}},function(t,e){t.exports=window.wp.apiFetch},function(t,e){t.exports=window.wp.compose},function(t,e){t.exports=window.wp.components},function(t,e){t.exports=function(t){if(Array.isArray(t))return t}},function(t,e){t.exports=function(t,e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(t)){var r=[],_n=!0,n=!1,o=void 0;try{for(var c,a=t[Symbol.iterator]();!(_n=(c=a.next()).done)&&(r.push(c.value),!e||r.length!==e);_n=!0);}catch(t){n=!0,o=t}finally{try{_n||null==a.return||a.return()}finally{if(n)throw o}}return r}}},function(t,e,r){var n=r(10);t.exports=function(t,e){if(t){if("string"==typeof t)return n(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);return"Object"===r&&t.constructor&&(r=t.constructor.name),"Map"===r||"Set"===r?Array.from(t):"Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r)?n(t,e):void 0}}},function(t,e){t.exports=function(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}},function(t,e){t.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(t,e,r){"use strict";r.r(e);var n=r(0),o=r(1),c=r(2),a=Object(n.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 242.5 239.46"},Object(n.createElement)("defs",null,Object(n.createElement)("clipPath",{id:"clip-path",transform:"translate(1.72)"},Object(n.createElement)("circle",{class:"cls-1",cx:"119.73",cy:"119.73",r:"116.15",fill:"none"}))),Object(n.createElement)("g",{id:"Layer_2","data-name":"Layer 2"},Object(n.createElement)("g",{id:"Layer_1","data-name":"Layer 1"},Object(n.createElement)("g",{class:"cls-2","clip-path":"url(#clip-path)"},Object(n.createElement)("circle",{class:"cls-3",cx:"121.45",cy:"119.73",r:"116.15",fill:"#33c6f4"}),Object(n.createElement)("path",{class:"cls-4",d:"M239.32,167.79c-53.41-24-108.37-91.46-113-94.55s-10.84.77-10.84.77c-3.87-6.19-10.06.77-10.06.77C76.77,123.55.14,170.11.14,170.11S36.94,237.79,122,237.79C208.48,237.79,239.32,167.79,239.32,167.79Z",transform:"translate(1.72)",fill:"#1b447e"}),Object(n.createElement)("path",{class:"cls-5",d:"M67.48,116.58s15.48-7,12.38,4.65-15.48,28.64-11.61,29.41S83,140.58,86.06,142.12s5.42.78,3.87,6.2-3.1,9.29,0,9.29,5.42-7,9.29-13.94,10.06-3.87,12.38-1.55,9.29,15.49,14.71,13.94,8.51-8.52,6.19-24,1.55-20.12,1.55-20.12,4.64-2.32,13.16,8.51,24,27.09,26.31,26.32-10.83-17.8-7.74-19.35,15.48,2.32,21.68,7.74c0,0,2.12,8.87,2.12.36L126.31,73.24,115.47,74l-10.06.77S80.64,111.94,67.48,116.58Z",transform:"translate(1.72)",fill:"#fff"}),Object(n.createElement)("path",{class:"cls-6",d:"M239.32,170.11c-53.41-24-108.37-93.78-113-96.87s-10.84.77-10.84.77c-3.87-6.19-10.06.77-10.06.77C76.77,123.55.14,170.11.14,170.11",transform:"translate(1.72)",fill:"none",stroke:"#221e1f","stroke-miterlimit":"10","stroke-width":"8px"})),Object(n.createElement)("circle",{class:"cls-6",cx:"121.45",cy:"119.73",r:"116.15",fill:"none",stroke:"#1b447e","stroke-miterlimit":"10","stroke-width":"8px"})))),i=r(3),l=r.n(i),s=r(4),f=r.n(s),u=r(5),p=r(6),m=new Map;f()({path:"contact-form-7/v1/contact-forms?per_page=20"}).then((function(t){Object.entries(t).forEach((function(t){var e=l()(t,2),r=(e[0],e[1]);m.set(r.id,r)}))}));var d={from:[{type:"shortcode",tag:"contact-form-7",attributes:{id:{type:"integer",shortcode:function(t){var e=t.named.id;return parseInt(e)}},title:{type:"string",shortcode:function(t){return t.named.title}}}}],to:[{type:"block",blocks:["core/shortcode"],transform:function(t){return Object(c.createBlock)("core/shortcode",{text:'[contact-form-7 id="'.concat(t.id,'" title="').concat(t.title,'"]')})}}]};Object(c.registerBlockType)("contact-form-7/contact-form-selector",{title:Object(o.__)("Contact Form 7","contact-form-7"),description:Object(o.__)("Insert a contact form you have created with Contact Form 7.","contact-form-7"),category:"widgets",attributes:{id:{type:"integer"},title:{type:"string"}},icon:a,transforms:d,edit:function t(e){var r=e.attributes,c=e.setAttributes;if(!m.size&&!r.id)return Object(n.createElement)("div",{className:"components-placeholder"},Object(n.createElement)("p",null,Object(o.__)("No contact forms were found. Create a contact form first.","contact-form-7")));var a=Array.from(m.values(),(function(t){return{value:t.id,label:t.title}}));if(r.id)a.length||a.push({value:r.id,label:r.title});else{var i=a[0];c({id:parseInt(i.value),title:i.label})}var l=Object(u.useInstanceId)(t),s="contact-form-7-contact-form-selector-".concat(l);return Object(n.createElement)("div",{className:"components-placeholder"},Object(n.createElement)("label",{htmlFor:s,className:"components-placeholder__label"},Object(o.__)("Select a contact form:","contact-form-7")),Object(n.createElement)(p.SelectControl,{id:s,options:a,value:r.id,onChange:function(t){return c({id:parseInt(t),title:m.get(parseInt(t)).title})}}))},save:function(t){var e=t.attributes;return Object(n.createElement)("div",null,'[contact-form-7 id="',e.id,'" title="',e.title,'"]')}})}]);