<body id="body">
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="style.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create Form</h1>
    <script type="text/javascript">
      function add(type)
      {
        ch = prompt("Enter 1.textbox 2.radio 3.image/pdf 4.Drop-down ...");
        if(ch==1)
        {
            var element = document.createElement("input");
            element.setAttribute("type",type);
            element.setAttribute("value",type);
            element.setAttribute("name",type);
            element.value=prompt("Set value:");
            element.name=prompt("Set name:");
            var s = document.getElementById("bar");
            s.appendChild(element);
          }
          if(ch==2)
          {
            var l = document.getElementById("msg");
            l.style.display = "block";
            var element = document.createElement("input");
            element.setAttribute("type",type);
            element.setAttribute("value",type);
            element.setAttribute("name",type);
            var s = document.getElementById("bar");
            l.appendChild(element);
          }
          if(ch==3)
        {
            var element = document.createElement("input");
            element.setAttribute("type",type);
            element.setAttribute("value",type);
            element.setAttribute("name",type);
            element.name="file";
            var s = document.getElementById("bar");
            s.appendChild(element);
          }
          if(ch==4)
          {
            var b=document.getElementById("branch");
            b.style.display="block";
            var temp=document.getElementById("start");

            var n=prompt("Enter no. of options");
            var a=1;
            while(a<=n)
               {
                var opt = document.createElement("option");
                opt.text=prompt("Set text");
                opt.value=prompt("Set value");
                temp.options.add(opt);
                a++;
             }
          }



          }
    
    </script>
    <form class="form" action="processform.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>

        Enter Choice:<select name="element">
        <option value="text">Text</option>
        <option value="text">Drop-down</option>
        <option value="radio">radio</option>
       <option value="file">file</option>
      </select>
      <input type="button" value="add" class="btn"  onclick="add(document.forms[0].element.value)"/>
      <input type="text" placeholder="Name" name="name" required>
      <input type="text" placeholder="College" name="college" required>
      <input type="text" placeholder="Year" name="year" required><br>
      <label>Branch</label>
      <select name="branch" required>
        <option>CSE</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>ICE</option>
        <option>MECH</option>
        <option>CHEM</option>
        <option>MME</option>
        <option>CIVIL</option>
        <option>PROD</option>
      </select>
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="file" accept="image/*" required /></div>
      <span id="bar">&nbsp;
        <p id="branch" style="display: none;">
       <label >Menu</label>
       <select id="start">
         <option >...</option>
       </select>
       </p>

      <p id="msg" style="display: none;">Confirm     </p>

      </span><br>
      <div>
      <input type="submit" value="Save" name="save" class="btn" />
    </div>
      </div>
    </form>
  </div>
</div>
</body>