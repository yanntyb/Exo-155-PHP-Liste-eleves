let sex = document.getElementById("sex");
let img = document.getElementById("img");

function afficherSex(sex){
    if(sex === "Femme"){
        img.src = "https://lh3.googleusercontent.com/proxy/G2x75hZ4JtX4KfHmaqKOIz1Ig0t7Qu2n8-HQX0rJAvnwQKQ7MfDyLoSPblBX1iHGPLVGhgx0xQB9jOkbggvtmSI9ygrBNnx586fWIqBYK_U0y9Y"
    }
}

afficherSex(sex.innerHTML);