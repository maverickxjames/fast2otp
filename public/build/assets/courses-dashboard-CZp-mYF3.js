var a={chart:{height:344,toolbar:{show:!1},dropShadow:{enabled:!0,enabledOnSeries:void 0,top:1,left:0,blur:3,color:"#000",opacity:.1}},grid:{show:!0,borderColor:"rgba(119, 119, 142, 0.1)",strokeDashArray:4},dataLabels:{enabled:!1},stroke:{width:[1.5,2],curve:"straight",dashArray:[0,5]},legend:{show:!0,position:"top",horizontalAlign:"center",fontWeight:600,fontSize:"11px",tooltipHoverFormatter:function(s,e){return s+" - "+e.w.globals.series[e.seriesIndex][e.dataPointIndex]},labels:{colors:"#74767c"},markers:{width:8,height:8,strokeWidth:0,radius:12,offsetX:0,offsetY:0}},series:[{name:"Last Year",data:[44,55,41,67,42,22,43,21,41,56,27,43],type:"area"},{name:"This Year",data:[23,11,22,35,17,28,22,37,21,44,22,30],type:"line"}],fill:{opacity:1,type:["gradient","soild"],gradient:{shade:"light",type:"vertical",shadeIntensity:.01,opacityFrom:.02,opacityTo:.02}},colors:["rgba(var(--primary-rgb))","rgba(227, 84, 212, 0.5)"],yaxis:{title:{style:{color:"#adb5be",fontSize:"14px",fontFamily:"poppins, sans-serif",fontWeight:600,cssClass:"apexcharts-yaxis-label"}},labels:{show:!0,style:{colors:"#8c9097",fontSize:"11px",fontWeight:600,cssClass:"apexcharts-xaxis-label"}}},xaxis:{type:"day",categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],axisBorder:{show:!0,color:"rgba(119, 119, 142, 0.05)",offsetX:0,offsetY:0},axisTicks:{show:!0,borderType:"solid",color:"rgba(119, 119, 142, 0.05)",width:6,offsetX:0,offsetY:0},labels:{rotate:-90,style:{colors:"#8c9097",fontSize:"11px",fontWeight:600,cssClass:"apexcharts-xaxis-label"}}}};document.getElementById("earning").innerHTML="";var t=new ApexCharts(document.querySelector("#earning"),a);t.render();new Swiper(".swiper-basic",{loop:!0,slidesPerView:1,spaceBetween:20,autoplay:{delay:2300,disableOnInteraction:!1},breakpoints:{500:{slidesPerView:2,spaceBetween:20},768:{slidesPerView:3,spaceBetween:20},1024:{slidesPerView:3,spaceBetween:20},1200:{slidesPerView:3,spaceBetween:20},1400:{slidesPerView:4,spaceBetween:20},1600:{slidesPerView:4,spaceBetween:20},1800:{slidesPerView:4,spaceBetween:20}}});
