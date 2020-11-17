<div class="w3-blue" style="width: 4%; cursor: pointer;height: 15%;" onclick="document.getElementById('modal').style.display='block'">
  <i class="fa fa-comment fa-lg"></i>
</div>
<div class="w3-modal" id="modal">
	<form class="w3-container">
	<div class="form-group">
		<input type="text" name="" class="w3-input" placeholder="Email adress" style="background-color: rgba(0,0,0,0); color: white;">
		</div>
		 <div class="form-group">
  <label for="comment" class="w3-text-white">Comment:</label>
  <textarea class="w3-input" id="comment" style="background-color: rgba(0,0,0,0); color: white;"></textarea>
</div>
<input type="submit" name="" class="w3-btn w3-hover-blue w3-border" value="Submit" style=" background-color: rgba(0,0,0,0); color: white;">
<button class="w3-btn pull-right w3-border w3-hover-red" style=" background-color: rgba(0,0,0,0); color: white;" onclick="document.getElementById('modal').style.display='none'">Cancel</button>
	</form>
</div>