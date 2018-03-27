<!DOCTYPE html>
<html>
    <head>
    </head>
    
    <body>
        <div class="container">
            <div class="chat_box">
				<div class="chat_data">
					
				</div>
            </div>
            <form method="post" >				
                <input type="text" id="Name" placeholder="Enter Name: " class='uchat'/>
                <textarea id="Message" placeholder="Enter Message" class='uchat'></textarea>
                <input type="button" name="chatsubmit" value="Send!" id="send" onclick="chatstore(document.getElementById('Name').value,document.getElementById('Message').value)" />
            </form>
			
        </div>
    
    </body>
</html>