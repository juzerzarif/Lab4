function validateForm()
{
  let name = document.getElementById("user");
  let pass = document.getElementById("pass");
  let item1 = document.getElementById("item1");
  let item2 = document.getElementById("item2");
  let item3 = document.getElementById("item3");
  let item = [item1, item2, item3];
  let radio = document.getElementsByName("ship");
  let checkR = false;

  if(name.value == "")
  {
    alert("Please input a user name");
    return false;
  }

  if(pass.value=="")
  {
    alert("Please enter a password");
    return false;
  }

  for(let i=0; i<item.length; i++)
  {
    if(item[i].value==""||item[i].value<0)
    {
      alert("Invalid Quantity! Please enter valid quantity");
      return false;
    }
  }

  for(let i=0; i<radio.length; i++)
  {
    if(radio[i].checked) checkR = true;
  }
  
  if(!checkR)
  {
    alert("Please select a shipping option");
    return false;
  }
  return true;
}
