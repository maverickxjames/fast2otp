(function(){let c=document.querySelector(".check-all");c.addEventListener("click",l);function l(){c.checked?document.querySelectorAll(".joblist-checkbox input").forEach(function(e){e.closest(".joblist-list").classList.add("selected"),e.checked=!0}):document.querySelectorAll(".joblist-checkbox input").forEach(function(e){e.closest(".joblist-list").classList.remove("selected"),e.checked=!1})}document.querySelectorAll(".joblist-btn").forEach(e=>{e.onclick=()=>{e.closest(".joblist-list").remove()}})})();
