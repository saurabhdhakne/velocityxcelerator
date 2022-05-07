<?php 
    include 'header.php';
?>
    <style>
        .chatbot{
            position:fixed;
            right:3%;
            bottom:2vh;
            font-size:.8em;
        }
        .chatbot input{
            font-size:12px;
        }
    </style>

    <span class="chatbot" style='width:300px;' id="chatbot">
        <div class="chat-messages bg-white mb-2 rounded shadow-sm p-2" id="chat-messages" style="display:none;height:300px; overflow-y:auto">
                <span class="offset-10 col-1 h5 d-flex justify-content-end"  role="button" onclick="chatbotClose()">
                    <i class="fa fa-close icon text-E94D65"></i>
                </span>
                <span class="col-8 d-inline-flex bg-light p-2  shadow-sm mb-3">
                    Hello. Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                </span>
                <span class="col-8 offset-4 d-inline-flex bg-light p-2 shadow-sm mb-3">
                    Hello. Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                </span>
        </div>
        <span class="shadow-sm h1 bg-white rounded-pill mr-4 d-inline-flex p-2 align-items-center" id="chatbot-msg" role="button" onclick="chatbotOpen()">
            <!-- <i class="fa fa-comment icon text-E94D65" id="icon-comment"></i> -->
            <div class="form-group p-3 pt-0 pb-0">
                <input type="text" class="form-control" id="chatbot-input" placeholder="Enter your message...">
            </div>
            <span class="h5 p-2 m-3 mt-0 ml-0 mb-0 " role="button">
                <i class="fa fa-send icon text-E94D65" id="icon-send" style=""></i>
            </span>
        </span>
    </span>

        <script>
            function chatbotOpen(){
                // document.getElementById('icon-comment').style = 'display:none';
                document.getElementById('icon-send').style = 'display:block';
                document.getElementById('chat-messages').style = 'display:inline-block';
            }
            function chatbotClose(){
                // document.getElementById('icon-comment').style = 'display:inline-block';
                document.getElementById('icon-send').style = 'display:none';
                document.getElementById('chat-messages').style = 'display:none';
            }
        </script>
<?php 
    include 'footer.php';
?>