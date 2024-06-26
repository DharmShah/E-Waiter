<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
        overflow: hidden;
        cursor: none;
    }
    .fire-container{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        pointer-events: none;
    }
    .fire{
        position: absolute;
        width: 10px;
        height: 10px;
        background-color: #745764;
        border-radius: 50%;
        animation: fireAnimation 1s ease-out;
        transition: .15s;
    }
    @keyframes fireAnimation{
        to{
            transform: scale(5);
            opacity: 0;
        }
    }

</style>
<body>
    <script>
        const fireContainer = document.createElement("div");
        fireContainer.className = "fire-container";
        document.body.appendChild(fireContainer);

        document.addEventListener("mousemove",function(event){
            createfire(event.clientX,event.clientY);
        });

        function createfire(x,y) {
            const fire = document.createElement("div");
            fire.className = "fire";
            fire.style.left = x + "px";
            fire.style.top = y + "px";
            fireContainer.appendChild(fire);

            setTimeout(()=>{
                fire.remove();
            },1000);
        }


    </script>
</body>
</html>