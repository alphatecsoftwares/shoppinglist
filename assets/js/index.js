$("document").ready(()=>{
    let pname=null
    displayHideSortBtn()
    $("#item-modify").hide()
    
$("#add-form").on("submit",event=>{
    event.preventDefault()
    const item=$("#item-name").val()
    if(!item){
        alert("Empty submission, Please fill the field")
    }else{
        const listedItems=getListedElements() // get the already listed items
      

        listedItems.push(item) // add the new list item
        const encodedList= JSON.stringify(listedItems)//convert to JSON to send via AJAX
        const data={
            encodedList,
            task: "add_item"
        }
        // console.log(encodedList)
        $.ajax({
            url: "api.php",
            type: "POST",
            data,
            dataType: "JSON",
            success: res=>{
                // console.log(res)
                $("#item-name").val('')
                listItems(res);
                addItemsToSelect(res)
                displayHideSortBtn()

            }
    
        })
    }
   
    // console.log(item)
})
$("#delete-btn").on("click", e=>{
    e.preventDefault()
    // console.log("clicked")
   const item= $( "#items option:selected" ).text();
   const data={
       item,
       task:"delete"
   }
   if(!item){alert("Empty Submission, Please fill the field")}
   else{
   $.ajax({
    url: "api.php",
    type: "POST",
    data,
    dataType: "JSON",
    success: res=>{
        console.log(res)
        // console.log(res.)
        listItems(res);
        addItemsToSelect(res)
        displayHideSortBtn()
    }

})
   }

})
$("#edit-btn").on("click", e=>{
e.preventDefault()
const item= $( "#items option:selected" ).text();
if(!item){alert("Empty field, select item to modify")}
else{
pname=item
$("#edit-item").hide()
$("#item-modify").show()
$("#item-change").val(item)
// console.log(item)
}
})
$("#save-btn").on("click", e=>{
    e.preventDefault()
   const new_item= $("#item-change").val()
   if(!new_item){}
   else{
       const data={
           new_item,
           pname,
           task: "modify"
       }
    //    console.log(data)
    $.ajax({
        url: "api.php",
        type: "POST",
        data,
        dataType: "JSON",
        success: res=>{
            console.log(res)
            // console.log(res.)
            listItems(res);
            addItemsToSelect(res)
        }
    
    })
   }

})
$("#cancel-btn").on("click", e=>{
    e.preventDefault()
    $("#edit-item").show()
    $("#item-modify").hide() 
})
$("#sort-btn").on(" click",e=>{
    e.preventDefault()
    let items=getListedElements()
    items.length >1?performSort(items):null
})

})
// fn to sort the listed items alphabetically in ascending order A-Z
const performSort=(items)=>{
    items.sort()
    listItems(items)

}
const listItems=list=>{
    $("#list-items").empty()
    list.forEach(element => {
        $("#list-items").append('<li>'+element+'</li>')
    });

}
const addItemsToSelect=list=>{
    
    $("#items").empty()
    list.forEach(element => {
        $("#items").append('<option>'+element+'</option>')
    })
}
const getListedElements=()=>{
    const listTexts=[]
    $("ol li").each(function() { listTexts.push($(this).text()) });
    return listTexts

}
const displayHideSortBtn=()=>{
    const itemsLength=getListedElements().length;
    if(itemsLength>1)
    $("#sort-btn").show()
    else 
    $("#sort-btn").hide()

}