var e={series:[1754,634],labels:["Male","Female"],chart:{height:200,type:"donut"},dataLabels:{enabled:!1},legend:{show:!1},stroke:{show:!0,curve:"smooth",lineCap:"round",colors:"#fff",width:1,dashArray:0},plotOptions:{pie:{startAngle:-90,endAngle:90,offsetY:10,expandOnClick:!1,donut:{size:"70%",background:"transparent",labels:{show:!0,name:{show:!0,fontSize:"20px",color:"#495057",offsetY:-25},value:{show:!0,fontSize:"12px",color:void 0,offsetY:-25,formatter:function(r){return r+"%"}},total:{show:!0,showAlways:!0,label:"Total",fontSize:"14px",fontWeight:600,color:"#495057"}}}}},grid:{padding:{bottom:-100}},colors:["rgba(var(--primary-rgb))","rgb(227, 84, 212)"]},a=new ApexCharts(document.querySelector("#job-acceptance"),e);a.render();var e={series:[{name:"Applications",data:[30,25,36,30,45,35,64]},{name:"Shortlisted",data:[33,21,32,37,23,32,47]},{name:"Rejected",data:[30,25,36,30,45,35,64]},{name:"On-Hold",data:[44,55,41,42,22,43,21]}],chart:{type:"bar",height:325,fontFamily:"Montserrat, sans-serif",foreColor:"#d4d7d9",stacked:!0,toolbar:{show:!1},zoom:{enabled:!0}},grid:{borderColor:"#f1f1f1",strokeDashArray:3},dataLabels:{enabled:!1},legend:{show:!0,position:"top",markers:{shape:"circle",size:"6",strokeWidth:0}},tooltip:{enabled:!0,theme:"dark",shared:!0,intersect:!1},colors:["rgba(var(--primary-rgb))","rgba(227, 84, 212, 0.5)","rgba(255, 93, 159, .4)","rgba(255, 142, 111, .3)"],labels:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],plotOptions:{bar:{columnWidth:"25%",borderRadius:5}},xaxis:{show:!1,axisBorder:{show:!1},axisTicks:{show:!1}}},a=new ApexCharts(document.querySelector("#jobs-statistics"),e);a.render();
