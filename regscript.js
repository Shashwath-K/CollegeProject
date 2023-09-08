var v1,v2,tabV;
		function hide(){
			var valT=document.getElementById(tableR1).value;
			tabV=document.getElementById(tableR1).style.visibility;
			if(valT==null){
				tabV=hide;
			}
			else{
				tabV=visibility.visible;
			}
		}
		function fill1()
		{
			v1=document.getElementById('course1').value;
			v2=document.getElementById('course2').value;
			if(v1=="CS" && v2=="first")
			{
				document.getElementById('c1').value="Applied Science";
				document.getElementById('c2').value="Engineering Mathematics I";
				document.getElementById('c3').value="Concepts of Electrical and Electronics Engineering";
				document.getElementById('c9').value="Applied Science Lab";
				document.getElementById('c10').value="Basic Computer Skill Lab";
				document.getElementById('c11').value="Electronics Lab";
			}
			if(v1=="CS" && v2=="second")
			{
				document.getElementById('c1').value="Engineering Mathematics II";
				document.getElementById('c2').value="Digital & Computer Fundamentals";
				document.getElementById('c3').value="Communication Skills in English";
				document.getElementById('c9').value="Digital Electronics Lab";
				document.getElementById('c10').value="Basic Web Design Lab";
				document.getElementById('c11').value="Multimedia Lab";
			}
			if(v1=="CS" && v2=="third")
			{
				document.getElementById('c1').value="Programming with C";
				document.getElementById('c2').value="Computer Organisation";
				document.getElementById('c3').value="Database Management System";
				document.getElementById('c4').value="Computer Network";
				document.getElementById('c9').value="Programming with C Lab";
				document.getElementById('c10').value="DBMS and GUI lab";
				document.getElementById('c11').value="Network Administration Lab";
				document.getElementById('c5').value="Kannada";
			}
			if(v1=="CS" && v2=="fourth")
			{
				document.getElementById('c1').value="Data Structure using C";
				document.getElementById('c2').value="OOP with Java";
				document.getElementById('c3').value="Operating System";
				document.getElementById('c4').value="Professional Ethics & Indian Constituto";
				document.getElementById('c9').value="Data Structures Lab";
				document.getElementById('c10').value="OOPS with Java Lab";
				document.getElementById('c11').value="Linux lab";
				document.getElementById('c5').value="Kannada";
			}
			if(v1=="CS" && v2=="fifth")
			{
				document.getElementById('c1').value="Software Engineering";
				document.getElementById('c2').value="Web Programming";
				document.getElementById('c3').value="Design and Analysis of Algorithms";
				document.getElementById('c4').value="Green Computing";
				document.getElementById('c9').value="Web Programming lab";
				document.getElementById('c10').value="Design and Analysis of Algorithms";
				document.getElementById('c11').value="Professional Practices lab";
				document.getElementById('c12').value="Project Work Phase- I";
			}
			if(v1=="CS" && v2=="sixth")
			{
				document.getElementById('c1').value="Software Testing";
				document.getElementById('c2').value="Network Security and Management";
				document.getElementById('c3').value="Mobile Computing";
				document.getElementById('c9').value="Software Testing lab";
				document.getElementById('c10').value="Network Security lab";
				document.getElementById('c11').value="Project Work Phase-II";
			}
			if(v1=="AT" && v2=="first")
			{
				document.getElementById('c1').value="COMMUNICATIONSKILLS IN ENGLISH ";
				document.getElementById('c2').value="ENGINEERING MATHEMATICS–I";
				document.getElementById('c3').value="AUTOMOBILE ENGINEERING-1";
				document.getElementById('c9').value="ENGINEERING GRAPHICS-I";
				document.getElementById('c10').value="Basic Computer Skills Lab";
				document.getElementById('c11').value="Automobile Engineering Lab-I";
			}
		}