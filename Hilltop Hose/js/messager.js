	
	//Script for controling the features of messager.php.
	var userList = [];
	var recipientList = [];
	var numRecipients = 0;

	var members = document.getElementById("members").innerHTML;
	var userDOM = document.getElementById("users");
	var recipDOM = document.getElementById("recipients");
	var h_recipDOM = document.getElementById("recip");
	
	
	
	var m1 = members.split(',');
	members = null;
	
	for(var key in m1){
		member = m1[key];
		member = member.split('|');
		userList[member[0]] = member[1];
	}
	
	refreshLists();
	
	
	
	function addUser(){
		var selectedUser = {};
		
		try{
			selectedUser['id'] = userDOM.options[userDOM.selectedIndex].value;
			selectedUser['name'] = userDOM.options[userDOM.selectedIndex].text;
		}
		catch(e){
			return;
		}
	
		delete userList[selectedUser['id']];
		recipientList[selectedUser['id']] = selectedUser['name'];
		refreshLists();
	}
	
	
	
	
	function removeUser(){
		var selectedUser = {};
		
		try{
			selectedUser['id'] = recipDOM.options[recipDOM.selectedIndex].value;
			selectedUser['name'] = recipDOM.options[recipDOM.selectedIndex].text;
		}
		catch(e){
			return;
		}
			
		userList[selectedUser['id']] = selectedUser['name'];
		delete recipientList[selectedUser['id']];
		refreshLists();
	}
	
	
	
	function submitForm(){
		if(numRecipients != 0)
			document.getElementById('s').click();
		else
			alert('You must have at least 1 recipient.');
	}
	
	
	
	function refreshLists(){
		var uList = '';
		var rList = '';
		var rIds = [];
		
		numRecipients = 0;
		
		for(id in userList){
			uList += '<option value=' + id + '>' + userList[id] + '</option>';
		}
		
		for(id in recipientList){
			rList += '<option value=' + id + '>' + recipientList[id] + '</option>';
			rIds.push(id);
			numRecipients++;
		}
		
		userDOM.innerHTML = uList;
		recipDOM.innerHTML = rList;
		h_recipDOM.value = rIds;
	}