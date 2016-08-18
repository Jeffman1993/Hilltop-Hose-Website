
	var userDOM = document.getElementById("users");
	var recipDOM = document.getElementById("recipients");
	var h_recipDOM = document.getElementById("recip");
	
	var userList = [];
	var recipientList = [];
	
	function addUser(){
		//Selected User Attributes.
		var selectedUser = {};
			selectedUser['id'] = userDOM.options[userDOM.selectedIndex].value;
			selectedUser['name'] = userDOM.options[userDOM.selectedIndex].text;
	
		recipientList[selectedUser['id']] = selectedUser['name'];
		refreshLists();
	}
	
	function removeUser(){
		var selectedUser = {};
			selectedUser['id'] = recipDOM.options[recipDOM.selectedIndex].value;
			selectedUser['name'] = recipDOM.options[recipDOM.selectedIndex].text;
			
		delete recipientList[selectedUser['id']];
		refreshLists();
	}
	
	function refreshLists(){
		var uList = '';
		var rList = '';
		var rIds = [];
		
		for(id in userList){
			
		}
		
		for(id in recipientList){
			rList += '<option value=' + id + '>' + recipientList[id] + '</option>';
			rIds.push(id);
		}
		
		//userDOM.innerHTML = uList;
		recipDOM.innerHTML = rList;
		h_recipDOM.value = rIds;
	}