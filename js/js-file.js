var count = 0;
document.getElementById("myButton").onclick = function () {
    count++;
    if (count % 2 == 0)
    {
        document.getElementById("demo").innerHTML = "";
    }
    else
    {
        var img = document.createElement("img");
        img.src = "https://empathyrooms.com/wp-content/uploads/2018/11/Why.jpg";
        img.style.width = "300px";
        img.style.height = "200px";
        document.getElementById("demo").appendChild(img);
    }
}