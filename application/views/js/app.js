var row = 0;
function addText(){
    var input = document.getElementById('inputFormacao').value;
    var input1 = document.getElementById('inputFormacao1').value;
    var input2 = document.getElementById('inputFormacao2').value;
    var input3 = document.getElementById('inputFormacao3').value;
    var final = input + " A " + input1 + "  " + "TIPO: " + input2 +"  "+ "CARGO: " + input3;
    console.log(final);
    if(input != "")
    {
    var node=document.createElement("li");
    var textnode=document.createTextNode(final);
    node.appendChild(textnode);
        node.setAttribute("id","contentP"+row);
    document.getElementById('list').appendChild(node);
    
    var removeTask = document.createElement('input');
    removeTask.setAttribute('type', 'button');
    removeTask.setAttribute("value", "Remove");
    removeTask.setAttribute("id", "removeButton");
    removeTask.setAttribute("onClick", "deleterow("+ row +");");

    node.appendChild(removeTask);
        row++;
    } 
    else
    {
        alert("Please insert a value!");
    }
    
}
function deleterow(ID)
{
    document.getElementById('contentP'+ID).remove();
}