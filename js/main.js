const password = document.querySelector("#p-input");
const p_icon = document.querySelector(".p-icon");
const p_icon2 = document.querySelector(".p-icon2");
 

        p_icon.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            p_icon.style.display = "none";
            p_icon2.style.display="block";
        });
        
        
        
        p_icon2.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            p_icon.style.display = "block";
            p_icon2.style.display="none";
        });
        
        
