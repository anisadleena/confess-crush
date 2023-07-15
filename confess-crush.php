<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Confession</title>
    <style id="anis">
        button {
            display: inline-block;
            background-color: hotpink;
            padding: 10px;
            width: 150px;
            color:beige;
            text-align: center;
            border-radius: 20px;
            border-color: darkgrey;
            margin-bottom: 20px;
        }

        img {
            border-radius: 20px
        }
    </style>
</head>

<body style="background-image: url('https://media.tenor.com/DO1dJzsv2MQAAAAC/aesthetic-aesthetic-background.gif');
             background-size:cover; text-align:center;">
             <div>
                <img src = 'https://media.tenor.com/OMHjcAIFzIMAAAAC/love-confession.gif' width="450" height="450">
                <div style="font-size:50px; font-family:'Times New Roman'; padding:20px; color:purple"> 
                    Will You Be Mine
                </div>
                    <button id = "item" onclick = nak() style="font-size: 20px;"> Yes!!!!!!</button>
                    <div style = "padding-right:150px">
                        <button id = "btn" onmouseover=taknak() style = "font-size:20px; position:absolute;"> No >.< </button> 
                    </div>
                </div>
             </div>

             <script>
                function nak(){
                    Swall.fire({
                        imageUrl: 'https://media.tenor.com/n-CEVz1Ii3YAAAAC/kiss.gif',
                        width:300,
                        height: 300,
                        background: 'pink';
                        text: 'HEHE, HELLO MY LOVE',
                        color: 'purple'
                    });
                }
                function taknak(){
                    var i = Math.floor(Math.random()*300)
                    var j = Math.floor(Math.random()*600)
                    btn.style.left = i * 'px';
                    btn.style.top = j * 'px';
                }
             </script>

</body>

</html>