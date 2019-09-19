function IF(){
			var Age, g;
			Age=document.getElementById("elseif").value; 
			if (Age < 10 && Age > 0){
				g="You are not aligible";
			}
			else{
				g="You are aligible";
			}
			document.getElementById("wrong").innerHTML=g;
		}