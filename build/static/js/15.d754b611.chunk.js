(this["webpackJsonpservice-provider-typescript"]=this["webpackJsonpservice-provider-typescript"]||[]).push([[15],{201:function(e,t,a){"use strict";a.r(t);var n=a(3),i=a(380),r=a(381),c=a(368),s=a(382),o=a(383),l=a(0),d=a.n(l),j=a(386),m=a(369),p=a(374),b=a(156),x=a.n(b),h=(a(157),a(17)),g=a(61),u=a(88),O=a(87),f=a.p+"static/media/category-banner-bg.cdb247bb.png",v=(Object(g.a)({overrides:{MuiContainer:{root:{}},MuiTypography:{h1:{},body1:{}}}}),Object(u.a)((function(e){var t;return Object(O.a)({banner:(t={background:"url(".concat(f,") no-repeat "),position:"relative",padding:" 250px 0 0 0",backgroundSize:"cover",backgroundPosition:"center",height:"695px",width:"100%",alignItems:"center",paddingLeft:"0px",paddingRight:"0px"},Object(h.a)(t,"@media (min-width: 600px)",{paddingLeft:"0",paddingRight:"0px"}),Object(h.a)(t,"&:before",{position:"absolute",width:"100%",height:"100%",left:0,backgroundColor:"rgb(0 0 0 / 55%)",top:0,content:'""'}),t),container:{position:"absolute",width:"100%"},headings:{textAlign:"center"},title:{fontStyle:"normal",fontVariantLigatures:"normal",fontVariantCaps:"normal",fontVariantNumeric:"normal",fontVariantEastAsian:"normal",fontWeight:"bold",fontStretch:"normal",fontSize:"63px",lineHeight:"77px",fontFamily:"Montserrat-bold",letterSpacing:"0px",marginLeft:"auto!important",marginRight:"auto!important",color:"#FFFFFF",marginBottom:".5rem"},description:{font:"normal normal normal 24px/36px Montserrat-Regular",letterSpacing:"0px",color:"#FFFFFF"},joinButton:{background:"transparent linear-gradient(\n                270deg\n                , #24AE90 0%, #0D004C 100%) 0% 0% no-repeat padding-box;\n                    border-radius: 5px",color:"#FFFFFF",minWidth:"150px",minHeight:" 48px",font:"normal normal 18px/14px 'Montserrat-Bold'",transition:"0.3s",borderRadius:" 5px",textTransform:"uppercase",fontWeight:600},joinNowWrap:{position:"relative",padding:"120px 5%"},sectionJoin:{zIndex:-1,overflow:"hidden",background:" #F9F9F9 0% 0% no-repeat padding-box !important"},joinHeading:{textAlign:"left",fontWeight:600,font:"normal normal 30px/39px 'Montserrat-bold'",letterSpacing:"0px",color:"#000000"}})}))),E=a(33),y=a(158),w=a.n(y),A=a(160),B=a.n(A),F=a.p+"static/media/cate-01.0a367058.svg",N=(a(161),a(371)),k=a(375),H=a(103),C=Object(u.a)((function(e){return Object(H.a)({tiles:{width:" 282.813px",marginRight:" 30px",marginBottom:" 30px",padding:"33px 0",border:"1px solid #E6E6E6",borderRadius:"8px"},tileContent:{height:"100%",width:"100%"},listCarousel:Object(h.a)({position:"relative",top:"-80px",left:"10%",width:"80vW",paddingRight:"15px",paddingLeft:"15px",marginRight:"auto",marginLeft:" auto"}," @media (min-width: 1200px)",{width:"1350px",maxWidth:"1350px"}),listContainer:{},imgFluid:{Width:"auto",margin:"0",padding:"0 100PX"},tileHeading:{textAlign:"center",font:"normal normal 16px/40px 'Montserrat-Medium'",letterSpacing:" 0px",color:" #878787",textTransform:"capitalize",margin:0,marginTop:"5px"},categoryList:{display:"flex",padding:"0 15%"}})})),D=a(130),R=a.n(D),Y=a(131),T=a(132),J=a.n(T);function Q(e){return U.apply(this,arguments)}function U(){return(U=Object(Y.a)(R.a.mark((function e(t){return R.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,J.a.get(t).then((function(e){return e.data.services})).catch((function(e){console.error(e)}));case 2:return e.abrupt("return",e.sent);case 3:case"end":return e.stop()}}),e)})))).apply(this,arguments)}var I=a(4),L={desktop:{breakpoint:{max:3e3,min:1024},items:3,paritialVisibilityGutter:60},tablet:{breakpoint:{max:1024,min:464},items:2,paritialVisibilityGutter:50},mobile:{breakpoint:{max:464,min:0},items:1,paritialVisibilityGutter:30}},S=function(e){var t=e.deviceType,a=C(),n=Object(l.useState)([]),i=Object(E.a)(n,2),r=i[0],s=i[1];return Object(l.useEffect)((function(){Q("http://demo.smartstorez.com/tempjson/services.php").then((function(e){s(e)}))}),[]),Object(I.jsxs)(c.a,{container:!0,className:a.listContainer,children:[Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(w.a,{className:a.listCarousel,draggable:!0,keyBoardControl:!0,partialVisbile:!0,renderButtonGroupOutside:!1,deviceType:t,itemClass:"image-item",responsive:L,children:r&&r.length>0?r.map((function(e){return Object(I.jsx)(N.a,{href:"/category/sub".concat(e.service_url),children:Object(I.jsxs)(k.a,{elevation:3,className:a.tiles,children:[Object(I.jsx)("img",{src:F,className:a.imgFluid}),Object(I.jsx)(m.a,{className:a.tileHeading,children:e.service_name})]})},r.indexOf(e))})):Object(I.jsx)(N.a,{href:"/category}",children:Object(I.jsxs)(k.a,{elevation:3,className:a.tiles,children:[Object(I.jsx)("img",{src:F,className:a.imgFluid}),Object(I.jsx)(m.a,{className:a.tileHeading,children:"loading...."})]})})})}),Object(I.jsx)(c.a,{item:!0,container:!0,className:a.categoryList,spacing:3,children:r&&r.length>0?r.map((function(e){return Object(I.jsx)(c.a,{item:!0,children:Object(I.jsxs)(k.a,{elevation:3,className:a.tiles,children:[Object(I.jsx)("img",{src:F,className:a.imgFluid}),Object(I.jsx)(m.a,{className:a.tileHeading,children:e.service_name})]})})})):Object(I.jsx)(c.a,{item:!0,children:Object(I.jsxs)(k.a,{elevation:3,className:a.tiles,children:[Object(I.jsx)("img",{src:F,className:a.imgFluid}),Object(I.jsx)(m.a,{className:a.tileHeading,children:"loading..."})]})})})]})};S.getInitialProps=function(e){var t,a=e.req;t=a?a.headers["user-agent"]:navigator.userAgent;var n=new B.a;n.setUA(t);var i=n.getResult();return{deviceType:i.device&&i.device.type||"desktop"}};var M=S,G=function(e){var t=v();return Object(l.useEffect)((function(){x.a.init({duration:3e3})}),[]),Object(I.jsxs)(c.a,{children:[Object(I.jsx)(c.a,{item:!0,className:t.banner,children:Object(I.jsx)(j.a,{component:"div",className:t.container,children:Object(I.jsxs)(j.a,{className:t.headings,zIndex:"modal",children:[Object(I.jsx)(m.a,{className:t.title,children:"A nice section heading goes here"}),Object(I.jsx)(m.a,{className:t.description,children:"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed "})]})})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(M,{})}),Object(I.jsx)(c.a,{item:!0,className:t.sectionJoin,children:Object(I.jsx)(j.a,{className:t.joinNowWrap,children:Object(I.jsxs)(c.a,{container:!0,children:[Object(I.jsx)(c.a,{item:!0,xs:10,children:Object(I.jsx)("div",{"data-aos":"fade-left",children:Object(I.jsx)(m.a,{variant:"h4",className:t.joinHeading,children:"Professionals Are you looking for Customers?"})})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)("div",{"data-aos":"fade-left",children:Object(I.jsx)(p.a,{className:t.joinButton,children:"JOIN NOW"})})})]})})})]})},P=a(100),W=Object(P.a)((function(e){return Object(H.a)({serviceCategoryBanner:{height:"450px",background:"rgb(0 0 0 / 82%)",padding:"190px 0 0",color:"white"},serviceMainWrap:{padding:"60px 0",textAlign:"center"},serviceContainer:{margin:"0 15%"},serviceProductWrap:{},tiles:{width:" 282.813px",marginRight:" 30px",marginBottom:" 30px",padding:"33px 0",border:"1px solid #E6E6E6",borderRadius:"8px"},tileContent:{height:"100%",width:"100%"},imgFluid:{Width:"auto",margin:"0",padding:"0 100PX"},tileHeading:{textAlign:"center",font:"normal normal 16px/40px 'Montserrat-Medium'",letterSpacing:" 0px",color:" #878787",textTransform:"capitalize",margin:0,marginTop:"5px"},categoryList:{display:"flex",padding:"0 15%"}})})),V=a(5),K=function(){var e=Object(l.useState)([]),t=Object(E.a)(e,2),a=t[0],n=t[1];Object(l.useEffect)((function(){Q("http://demo.smartstorez.com/tempjson/sub_services.php").then((function(e){n(e)}))}),[]);Object(V.g)().tokenName;var i=W();return Object(I.jsxs)(c.a,{container:!0,children:[Object(I.jsx)(c.a,{item:!0,xs:12,className:i.serviceCategoryBanner,children:Object(I.jsxs)(j.a,{children:[Object(I.jsx)(m.a,{variant:"h4",children:" A nice section heading goes here"}),Object(I.jsx)(m.a,{children:" Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed"})]})}),Object(I.jsx)(c.a,{item:!0,xs:12,className:i.serviceMainWrap,children:Object(I.jsx)(j.a,{className:i.serviceContainer,children:Object(I.jsx)(k.a,{elevation:3,className:i.serviceProductWrap,children:Object(I.jsx)(c.a,{item:!0,container:!0,className:i.categoryList,spacing:3,children:a&&a.length>0?a.map((function(e){return Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(N.a,{href:"/companyList",children:Object(I.jsxs)(k.a,{elevation:3,className:i.tiles,children:[Object(I.jsx)("img",{src:F,className:i.imgFluid}),Object(I.jsx)(m.a,{className:i.tileHeading,children:e.service_name})]})},a.indexOf(e))})})):Object(I.jsx)(c.a,{item:!0,children:Object(I.jsxs)(k.a,{elevation:3,className:i.tiles,children:[Object(I.jsx)("img",{src:F,className:i.imgFluid}),Object(I.jsx)(m.a,{className:i.tileHeading,children:"loading..."})]})})})})})})]})},X=Object(P.a)((function(e){return Object(H.a)({root:{height:"100%"},backToTop:{position:"fixed",bottom:e.spacing(2),right:e.spacing(2)},topBar:{background:"transparent linear-gradient(\n        180deg\n        , #0D004C 0%, #24AE90 100%) 0% 0% no-repeat padding-box"}})})),z=a(251),q=a(378),Z=a(379),_=Object(P.a)((function(e){return Object(H.a)({root:{background:"#F9F9F9 0% 0% no-repeat padding-box"},paper:{maxWidth:345},media:{height:0,paddingTop:"56.25%",marginTop:"30",objectFit:"cover"},content:{"& > *":{marginBottom:"1rem !important"}},ratingBadge:{display:"flex",backgroundColor:"#1c7e7d",borderRadius:"4px",padding:"4px 6px",color:"#fff",fontFamily:"Montserrat-Regular"},viewCount:{fontFamily:"Montserrat-Regular",fontSize:"14px",paddingLeft:"10px"},productTitle:{},button:{border:"1px solid #ddd",width:"25px",backgroundColor:"#0D004C",padding:"0",height:"30px",color:"#fff",lineHeight:"30px"},up:{borderLeft:0,borderRadius:"30px 0 0 30px"},down:{borderRight:0,borderRadius:"0 30px 30px 0"},buttonAdd:{background:"transparent linear-gradient(270deg, #24AE90 0%, #0D004C 100%) 0% 0% no-repeat padding-box",borderRadius:"5px",border:"none",minWidth:"100%",minHeight:"42px",textAlign:"center",font:" normal normal 16px/21px 'Montserrat-Bold'",letterSpacing:"0px",color:" #FFFFFF",textTransform:"uppercase",lineHeight:"42px"}})})),$=a.p+"static/media/cleaning-kit3.dc95f013.png",ee=a(162),te=a.n(ee),ae=a(32),ne=[{id:"1001",name:"Salon For Men....",image:$,description:"this the product description",rating:"4.3",orginalPrice:"250",discountPrice:"100 ",viewsCount:"200"}];function ie(){var e=_();return Object(I.jsx)(j.a,{className:e.root,children:Object(I.jsxs)(c.a,{container:!0,children:[Object(I.jsxs)(c.a,{item:!0,xs:12,children:[Object(I.jsx)(m.a,{variant:"h4",children:"Products"}),Object(I.jsx)(m.a,{children:"Lorem ipsum dolor sit amet,"})]}),Object(I.jsx)(c.a,{container:!0,item:!0,spacing:3,children:ne.map((function(e){return ce(e)}))})]})})}var re=function(){var e=_(),t=Object(l.useState)({counter:0}),a=Object(E.a)(t,2),n=a[0],i=a[1];n.counter;return Object(I.jsxs)(z.a,{size:"small",variant:"text","aria-label":"small outlined button group",children:[Object(I.jsx)(p.a,{onClick:function(){i((function(e){return{counter:e.counter+1}}))},className:Object(ae.a)(e.button,e.up),children:"+"}),Object(I.jsx)(p.a,{disabled:!0,style:{color:"black"},children:n.counter}),Object(I.jsx)(p.a,{onClick:function(){i((function(e){return{counter:e.counter-1}}))},className:Object(ae.a)(e.button,e.down),children:"-"})]})},ce=function(e){var t=_();return console.log(e),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(q.a,{className:t.paper,children:Object(I.jsx)(Z.a,{children:Object(I.jsxs)(c.a,{container:!0,className:t.content,children:[Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)("img",{src:$})}),Object(I.jsx)(c.a,{children:Object(I.jsx)(m.a,{variant:"body2",color:"textSecondary",component:"p",className:t.productTitle,children:e.name})}),Object(I.jsxs)(c.a,{container:!0,item:!0,children:[Object(I.jsx)(c.a,{item:!0,children:Object(I.jsxs)(j.a,{component:"span",className:t.ratingBadge,children:[Object(I.jsx)(m.a,{children:e.rating}),Object(I.jsx)(te.a,{fontSize:"small",style:{color:"#f3b931"}})]})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsxs)(m.a,{variant:"caption",className:t.viewCount,children:[e.viewsCount," views"]})})]}),Object(I.jsxs)(c.a,{container:!0,item:!0,xs:12,children:[Object(I.jsxs)(c.a,{item:!0,xs:6,children:[Object(I.jsxs)("b",{children:["$",e.discountPrice," "]}),"\xa0\xa0",Object(I.jsxs)("s",{children:[" $",e.orginalPrice]})]}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(re,{})})]}),Object(I.jsx)(c.a,{item:!0,xs:12,children:Object(I.jsx)(p.a,{className:t.buttonAdd,children:"ADD"})})]})})})})},se=a(211),oe=a(253),le=a(254),de=a(255),je=a(367),me=a(40),pe=a(252),be=Object(me.a)({root:{borderBottom:"none"}})(pe.a),xe=Object(g.a)({overrides:{MuiButton:{label:{font:"normal normal 600 22px/26px 'Montserrat-Regular'"}}}}),he=Object(P.a)((function(e){return Object(H.a)({serviceCategoryBanner:{height:"450px",overflow:"gidden",background:"rgb(0 0 0 / 82%)",color:"white",textAlign:"center",font:"normal normal normal 24px/36px 'Montserrat-Regular'"},cartBAnnerHeading:{padding:"190px 0"},cartContainer:{padding:"0 2%"},cartWrapper:{backgroundColor:"#f9f9f9",padding:"0",border:"1px solid #EBEBEB",borderRadius:"5px"},cartHeading:{font:"normal normal 600 24px/29px 'Montserrat-Regular'",letterSpacing:"0px",backgroundColor:"#f6f6f6",padding:"15px 0",textAlign:"center"},cartItems:{border:"1px solid rgb(112 112 112 / 33%)",paddingTop:"20px",marginBottom:"35px"},subHeading:{font:"normal normal 600 20px/24px 'Montserrat-Regular'"},tabel:{width:"100%"},tabelRow:{border:"none"},totalText:{fontWeight:600,font:"normal normal 18px/22px 'Montserrat-Bold'"},total:{borderTopStyle:"dotted",borderBottomStyle:"dotted",color:"#cccccc"},promoArea:{textAlign:"center",backgroundColor:"#ffff"},promoHeading:{padding:"1.5rem 0"},payButtonArea:{textAlign:"center",padding:"1.5rem 0"},payButton:{background:"transparent linear-gradient(270deg, #24AE90 0%, #0D004C 100%) 0% 0% no-repeat padding-box",borderRadius:"4px",border:"none",letterSpacing:"0px",marginTop:"25px",marginRight:"15px",color:"#ffff",minWidth:"300px",minHeight:"48px",font:"'Montserrat', sans-serif",fontWeight:600}})})),ge=a.p+"static/media/offer.969a7a4d.svg",ue=[{id:"1001",name:"Avaon Mop Cleaning Bruch..",image:$,description:"this the product description",rating:"4.3",orginalPrice:"250",discountPrice:"100 ",viewsCount:"200"}],Oe=function(){var e=he();return Object(I.jsxs)(c.a,{container:!0,item:!0,className:e.cartItems,xs:12,spacing:2,children:[Object(I.jsx)(c.a,{item:!0,sm:12,children:Object(I.jsx)(m.a,{className:e.subHeading,children:"Product Name"})}),Object(I.jsx)(c.a,{item:!0,xs:2,children:Object(I.jsx)("img",{src:ue[0].image,style:{width:"100%"}})}),Object(I.jsxs)(c.a,{container:!0,item:!0,xs:10,spacing:2,children:[Object(I.jsx)(c.a,{item:!0,xs:12,children:Object(I.jsxs)(m.a,{children:["$",ue[0].discountPrice]})}),Object(I.jsx)(c.a,{item:!0,sm:2,children:Object(I.jsx)(m.a,{children:"Quantity"})}),Object(I.jsxs)(c.a,{container:!0,item:!0,sm:8,spacing:2,children:[Object(I.jsx)(c.a,{item:!0,sm:11,children:Object(I.jsx)(re,{})}),Object(I.jsx)(c.a,{item:!0,sm:1,children:Object(I.jsx)(p.a,{children:"REMOVE"})})]})]})]})},fe=function(){var e=he();return Object(I.jsxs)(I.Fragment,{children:[Object(I.jsx)(c.a,{item:!0,xs:12,children:Object(I.jsx)("h1",{children:"SUBTOTAL"})}),Object(I.jsx)(c.a,{item:!0,sm:12,children:Object(I.jsx)(oe.a,{children:Object(I.jsxs)(le.a,{children:[Object(I.jsxs)(de.a,{className:e.tabelRow,children:[Object(I.jsx)(be,{colSpan:2,children:"Item total"}),Object(I.jsx)(be,{children:"800"})]}),Object(I.jsxs)(de.a,{className:e.tabelRow,children:[Object(I.jsx)(be,{colSpan:2,children:"Tax"}),Object(I.jsx)(be,{children:"100"})]}),Object(I.jsxs)(de.a,{className:Object(ae.a)(e.total,e.tabelRow),children:[Object(I.jsx)(be,{colSpan:2,className:e.totalText,children:"Total"}),Object(I.jsx)(be,{className:e.totalText,children:"900"})]})]})})})]})},ve=function(){var e=he();return Object(I.jsx)(je.a,{theme:xe,children:Object(I.jsxs)("div",{children:[Object(I.jsx)(j.a,{className:e.serviceCategoryBanner,children:Object(I.jsxs)(j.a,{className:e.cartBAnnerHeading,children:[Object(I.jsx)(m.a,{variant:"h2",children:"A nice section heading goes here"}),Object(I.jsx)(m.a,{variant:"h5",children:"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed"})]})}),Object(I.jsx)(se.a,{maxWidth:"lg",className:e.cartWrapper,children:Object(I.jsxs)(c.a,{container:!0,item:!0,xs:12,children:[Object(I.jsxs)(c.a,{container:!0,item:!0,className:e.cartContainer,children:[Object(I.jsx)(c.a,{item:!0,sm:12,className:e.cartHeading,children:Object(I.jsx)(m.a,{variant:"h4",children:"PAY YOUR SERVICE"})}),Object(I.jsxs)(c.a,{container:!0,item:!0,xs:12,sm:8,spacing:1,children:[Object(I.jsx)(c.a,{item:!0,xs:12,children:Object(I.jsx)("h1",{children:"Added items"})}),Object(I.jsx)(c.a,{container:!0,item:!0,sm:11,children:Object(I.jsx)(Oe,{})})]}),Object(I.jsx)(c.a,{container:!0,item:!0,sm:4,xs:12,children:Object(I.jsx)(fe,{})})]}),Object(I.jsx)(c.a,{item:!0,sm:12,className:e.promoArea,children:Object(I.jsxs)(p.a,{disabled:!0,className:e.promoHeading,children:[Object(I.jsx)("img",{src:ge}),Object(I.jsx)(m.a,{children:"Offers and Promocode"})]})}),Object(I.jsx)(c.a,{item:!0,sm:12,className:e.payButtonArea,children:Object(I.jsx)(p.a,{className:e.payButton,href:"/category/payment",children:"PAY RS 900"})})]})})]})})},Ee=a(163),ye=a.n(Ee),we=(a(166),a.p+"static/media/company-banner.b7ef64b1.png"),Ae=Object(P.a)((function(){return Object(H.a)({companyListBanner:{height:"450px",background:"url(".concat(we,") no-repeat "),padding:"190px 0 0",position:"relative",color:"white","&:before":{height:"100%",width:"100%",left:0,top:0,position:"absolute",content:'""',background:"rgb(0 0 0 / 82%)"}},CompanyHeadingContainer:{width:"100%",position:"absolute",textAlign:"center"},CompanyHeading:{},viewDetails:{},viewDetailButton:{background:"transparent linear-gradient(\n                270deg\n                , #24AE90 0%, #0D004C 100%) 0% 0% no-repeat padding-box",borderRadius:"5px",border:"none",minWidth:"180px",minHeight:"48px",textAlign:"center",font:"normal normal 18px/14px 'Montserrat-Bold'",letterSpacing:"0px",color:"#FFFFFF",textTransform:"uppercase",lineHeight:"48px"}})})),Be=function(){var e=Ae(),t=d.a.useState(2),a=Object(E.a)(t,2);a[0],a[1];return Object(I.jsx)("div",{children:Object(I.jsxs)(c.a,{container:!0,children:[Object(I.jsx)(c.a,{item:!0,xs:12,className:e.companyListBanner,children:Object(I.jsxs)(j.a,{className:e.CompanyHeadingContainer,children:[Object(I.jsx)(m.a,{variant:"h4",className:e.CompanyHeading,children:" A nice section heading goes here"}),Object(I.jsx)(m.a,{children:" Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed"})]})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(se.a,{children:Object(I.jsxs)(c.a,{container:!0,children:[Object(I.jsx)(c.a,{item:!0,sm:2,children:Object(I.jsx)("img",{src:"data:image/png;base64,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"})}),Object(I.jsxs)(c.a,{container:!0,item:!0,sm:8,children:[Object(I.jsx)(c.a,{item:!0,sm:12,children:Object(I.jsx)(m.a,{variant:"h4",children:" Green Home Services"})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(ye.a,{total:5,rating:2})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(m.a,{children:"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."})})]}),Object(I.jsx)(c.a,{item:!0,className:e.viewDetails,children:Object(I.jsx)(p.a,{className:e.viewDetailButton,children:"View Details"})})]})})})]})})},Fe=Object(P.a)((function(){return Object(H.a)({paymentContainer:{background:"#F9F9F9 0% 0% no-repeat padding-box !important"}})})),Ne=function(){var e=Object(Y.a)(R.a.mark((function e(t,a){var n,i,r,c,s;return R.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:for(i in n=new FormData,a)r=i,c=a[i],n.append(r,c);return e.prev=2,e.next=5,J.a.post("https://sandboxsecure.payu.in/_payment",n);case 5:s=e.sent,console.log(s.data),e.next=12;break;case 9:e.prev=9,e.t0=e.catch(2),console.error(e.t0);case 12:case"end":return e.stop()}}),e,null,[[2,9]])})));return function(t,a){return e.apply(this,arguments)}}(),ke=function(){var e=Object(l.useState)({key:"weBeKABD",amount:"10",firstname:"Nandha",email:"nandhakumar270@gmail.com",phone:"9659654334",productinfo:"product1",surl:"https://www.payu.in/",furl:"https://www.payumoney.com/dev-guide/apireference.html",hash:"758ba759e5efc1e8f3d61af7fbeca87ef78e692d8515ed0a2de022210e56dc7ccf1f41be982b2a6bb10ba4cd4fe681e13456c51937cc959234bbb98ffea88a74",txnid:"product1"}),t=Object(E.a)(e,2),a=t[0],n=(t[1],Fe());return Object(I.jsx)(se.a,{maxWidth:"sm",className:n.paymentContainer,children:Object(I.jsxs)(c.a,{container:!0,spacing:5,children:[Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(m.a,{children:"Payment Inforamtion"})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(m.a,{children:"Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et"})}),Object(I.jsxs)(c.a,{item:!0,container:!0,children:[Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(m.a,{children:"Your total payment will be"})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(m.a,{children:"900"})})]}),Object(I.jsxs)(c.a,{container:!0,item:!0,children:[Object(I.jsxs)(c.a,{container:!0,item:!0,sm:6,children:[Object(I.jsx)(c.a,{item:!0,sm:12,children:Object(I.jsx)(p.a,{children:"Pay with strip"})}),Object(I.jsx)(c.a,{item:!0,sm:12,children:Object(I.jsx)(p.a,{children:"Pay with strip"})}),Object(I.jsx)(c.a,{item:!0,sm:12,children:Object(I.jsx)(p.a,{children:"Pay with strip"})})]}),Object(I.jsxs)(c.a,{item:!0,container:!0,sm:6,children:[Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(m.a,{children:"Total pay"})}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(oe.a,{children:Object(I.jsxs)(le.a,{children:[Object(I.jsxs)(de.a,{children:[Object(I.jsx)(pe.a,{children:"Item Total"}),Object(I.jsx)(pe.a,{children:"800"})]}),Object(I.jsxs)(de.a,{children:[Object(I.jsx)(pe.a,{children:"Tax"}),Object(I.jsx)(pe.a,{children:"100"})]}),Object(I.jsxs)(de.a,{children:[Object(I.jsx)(pe.a,{children:"Total"}),Object(I.jsx)(pe.a,{children:"900"})]})]})})})]})]}),Object(I.jsx)(c.a,{item:!0,children:Object(I.jsx)(p.a,{onClick:function(){Ne("http//:localhost:5000/payment",a)},children:"pay 900"})})]})})};function He(e){var t=e.children,a=e.window,n=X(),c=Object(i.a)({target:a?a():void 0,disableHysteresis:!0,threshold:100});return Object(I.jsx)(r.a,{in:c,children:Object(I.jsx)("div",{onClick:function(e){var t=(e.target.ownerDocument||document).querySelector("#back-to-top-anchor");console.log(t),t&&t.scrollIntoView({behavior:"smooth",block:"center"})},role:"presentation",className:n.backToTop,children:t})})}t.default=function(e){var t=X(),a=Object(V.h)(),i=a.path;a.url;return Object(I.jsx)("div",{className:t.root,children:Object(I.jsx)(c.a,{container:!0,children:Object(I.jsxs)(c.a,{item:!0,xs:12,sm:12,children:[Object(I.jsxs)(V.c,{children:[Object(I.jsx)(V.a,{exact:!0,path:i,component:G}),Object(I.jsx)(V.a,{path:"".concat(i,"/sub/:category"),component:K}),Object(I.jsx)(V.a,{path:"".concat(i,"/product-list"),component:ie}),Object(I.jsx)(V.a,{path:"".concat(i,"/cart"),component:ve}),Object(I.jsx)(V.a,{path:"".concat(i,"/company-list"),component:Be}),Object(I.jsx)(V.a,{path:"".concat(i,"/payment"),component:ke})]}),Object(I.jsx)(He,Object(n.a)(Object(n.a)({},e),{},{children:Object(I.jsx)(s.a,{style:{backgroundColor:"#1acc8d",color:"#ffff"},size:"small","aria-label":"scroll back to top",children:Object(I.jsx)(o.a,{fontSize:"large"})})}))]})})})}}}]);
//# sourceMappingURL=15.d754b611.chunk.js.map