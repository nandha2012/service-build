(this["webpackJsonpservice-provider-typescript"]=this["webpackJsonpservice-provider-typescript"]||[]).push([[5],{14:function(e,t,n){"use strict";n.d(t,"b",(function(){return r})),n.d(t,"d",(function(){return a})),n.d(t,"c",(function(){return c})),n.d(t,"f",(function(){return o})),n.d(t,"h",(function(){return i})),n.d(t,"g",(function(){return s})),n.d(t,"a",(function(){return l})),n.d(t,"e",(function(){return u}));var r="ADD_CHANGE",a="ADD_FILES",c="ADD_ERROR",o="REMOVE_ERROR",i="SET_LOADING",s="REMOVE_LOADING",l="ADD_ALERT",u="REMOVE_ALERT"},21:function(e,t,n){"use strict";n.d(t,"d",(function(){return r})),n.d(t,"b",(function(){return a})),n.d(t,"c",(function(){return c})),n.d(t,"a",(function(){return o})),n.d(t,"e",(function(){return i}));var r="LOG_OUT",a="ADD_USER",c="GET_USER",o="ADD_LOG_ALERT",i="REMOVE_LOG_ALERT"},77:function(e,t,n){},78:function(e,t,n){"use strict";n.r(t);var r=n(0),a=n.n(r),c=n(23),o=n.n(c),i=n(42),s=n(4),l=n(44),u=n(33),d=n(52),b=(n(71),d.a.initializeApp({apiKey:"AIzaSyD8eE6IMpIu2WVsqzD9mL3fNklbzQ3SMuQ",authDomain:"service-provider-308210.firebaseapp.com",databaseURL:"https://service-provider-308210-default-rtdb.firebaseio.com",projectId:"service-provider-308210",storageBucket:"service-provider-308210.appspot.com",messagingSenderId:"298853734814",appId:"1:298853734814:web:e83a5c1532a238b60a1e8f"})),j=b.auth(),p=n(5),f=a.a.createContext({});function O(e){var t=e.children,n=Object(r.useState)(),a=Object(u.a)(n,2),c=(a[0],a[1]),o=Object(r.useState)(!0),i=Object(u.a)(o,2),s=i[0],l=i[1],d={signup:function(e,t){return console.log(e),console.log(t),j.createUserWithEmailAndPassword(e,t)}};return Object(r.useEffect)((function(){return j.onAuthStateChanged((function(e){c(e),l(!1)}))}),[]),Object(p.jsx)(f.Provider,{value:d,children:!s&&t})}var g=n(18),h=n(16),m=n(3),v=n(14),_={user_type:"",first_name:"",last_name:"",username:"",password:"",primary_phone_no:"",address:"",userid:"",services:"",secondary_phone_no:""},y={error_email:!1,error_mobile:!1,error_password:!1,error_confirmPassword:!1,loading:!1,toggle:"false",message:""},E={profile_pic:""},R=n(21),x=n(54),A=Object(g.c)({userRegistrationReducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:_,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case v.b:return Object(m.a)(Object(m.a)({},e),{},Object(h.a)({},t.payload.field,t.payload.fieldValue));case v.d:return{};default:return e}},fileReducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:E,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case v.d:return console.log(t.payload.fieldValue),Object(m.a)(Object(m.a)({},e),{},Object(h.a)({},t.payload.field,t.payload.fieldValue));default:return e}},registerErrorReducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:y,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case v.c:return console.log(t.payload.field),Object(m.a)(Object(m.a)({},e),{},Object(h.a)({},t.payload.field,!0));case v.f:return Object(m.a)(Object(m.a)({},e),{},Object(h.a)({},t.payload.field,!1));case v.h:return Object(m.a)(Object(m.a)({},e),{},{loading:!0});case v.g:return console.log("loading remove..."),Object(m.a)(Object(m.a)({},e),{},{loading:!1});case v.a:return console.log(t),Object(m.a)(Object(m.a)({},e),{},{toggle:!0,message:t.message});case v.e:return Object(m.a)(Object(m.a)({},e),{},{toggle:!1,message:t.message});default:return e}},userReducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{toggle:!1},t=arguments.length>1?arguments[1]:void 0;switch(console.log(t.error_message),t.type){case R.a:return Object(m.a)(Object(m.a)({},e),{},{toggle:!0,error_message:t.error_message});case R.e:return Object(m.a)(Object(m.a)({},e),{},{toggle:!1,error_message:""});case R.c:return{};case R.b:return Object(m.a)(Object(m.a)({},e),t.payload);default:return e}}}),D=Object(g.d)(A,Object(g.a)(x.a)),L=n(97),S=n(60),w=n(93),I=n(96),z=(Object(S.a)({overrides:{MuiAppBar:{root:{}}}}),Object(w.a)((function(e){return Object(I.a)({loadingScreen:{margin:"auto",display:"felx"},lodingContainer:{display:"flex",justifyContent:"center",alignItems:"center",height:"100vh",margin:"auto"},spinner:{color:"#4fb25d"}})}))),C=a.a.lazy((function(){return Promise.all([n.e(0),n.e(2),n.e(1),n.e(3),n.e(9)]).then(n.bind(null,387))})),P=a.a.lazy((function(){return Promise.all([n.e(0),n.e(2),n.e(1),n.e(4),n.e(7)]).then(n.bind(null,378))})),T=a.a.lazy((function(){return Promise.all([n.e(0),n.e(2),n.e(1),n.e(4),n.e(14)]).then(n.bind(null,386))})),G=a.a.lazy((function(){return Promise.all([n.e(0),n.e(2),n.e(3),n.e(11),n.e(13)]).then(n.bind(null,383))}));var M=function(){var e=z();return Object(p.jsx)(l.a,{store:D,children:Object(p.jsx)("div",{className:"App",children:Object(p.jsx)(i.a,{children:Object(p.jsx)(O,{children:Object(p.jsx)(r.Suspense,{fallback:Object(p.jsx)("div",{className:e.lodingContainer,children:Object(p.jsx)(L.a,{className:e.spinner,thickness:4,size:50})}),children:Object(p.jsxs)(s.c,{children:[Object(p.jsx)(s.a,{exact:!0,path:"/",component:G}),Object(p.jsx)(s.a,{path:"/register",component:P}),Object(p.jsx)(s.a,{path:"/login",component:T}),Object(p.jsx)(s.a,{path:"/home",component:C}),Object(p.jsx)(s.a,{path:"/companyList",render:function(){window.location.href="/OurGenie/company-list.html"}})]})})})})})})},V=function(e){e&&e instanceof Function&&n.e(16).then(n.bind(null,377)).then((function(t){var n=t.getCLS,r=t.getFID,a=t.getFCP,c=t.getLCP,o=t.getTTFB;n(e),r(e),a(e),c(e),o(e)}))},N=n(59),k=n.n(N);n(77);k.a.config();o.a.render(Object(p.jsx)(a.a.StrictMode,{children:Object(p.jsx)(M,{})}),document.getElementById("root")),V()}},[[78,6,8]]]);
//# sourceMappingURL=main.2c3b183a.chunk.js.map