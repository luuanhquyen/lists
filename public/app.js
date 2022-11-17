
var client = new $.RestClient('/api/');
client.add('lefts');
client.add('rights');
var selected_left_id=0;
var selected_right_id=0;
var clickCount = 0;
getLeft();
getRight();

function getLeft()
{
    var request = client.lefts.read();
    // GET /rest/api/foo/
    request.done(function (data, textStatus, xhrObject){
        $( "#lefts" ).empty();
        $.each(data.data, function(index) {
            add_class='';
            if (data.data[index].is_selected==1) add_class='disabled';
            content = '<li id="left_'+data.data[index].id+'"  onclick="clickLeft('+data.data[index].id+')" class="left-li list-group-item '+add_class+'">'+data.data[index].content+'</li>';
            $( "#lefts" ).append(content);
        });
    });  
} 
function getRight()
{
    var request = client.rights.read();
    // GET /rest/api/foo/
    request.done(function (data, textStatus, xhrObject){
        $( "#rights" ).empty();
        $.each(data.data, function(index) {
            content = '<li id="right_'+data.data[index].id+'" onclick="clickRight('+data.data[index].id+')"  class="right-li list-group-item">'+data.data[index].content+'</li>';
            $( "#rights" ).append(content);
        });
    });  
} 

function addRight(id){
    client.rights.create({id:id}).done(function(data) {
        getLeft();
        getRight();
      }); 
      
}

function clickLeft(id)
{
    clickCount++;
    if (clickCount === 1) {
        singleClickTimer = setTimeout(function() {
            clickCount = 0;
            selected_left_id=id;
            $(".left-li").removeClass('active');
            $('#left_'+id).addClass('active'); 
            $('#right-button').prop('disabled', false);
        }, 400);
    } else if (clickCount === 2) {
        clearTimeout(singleClickTimer);
        clickCount = 0;
        addRight(id);
    }
}

function clickRight(id)
{
    clickCount++;
    if (clickCount === 1) {
        singleClickTimer = setTimeout(function() {
            clickCount = 0;
            selected_right_id=id;
            $(".right-li").removeClass('active');
            $('#right_'+id).addClass('active'); 
            $('#left-button').prop('disabled', false);
        }, 400);
    } else if (clickCount === 2) {
        clearTimeout(singleClickTimer);
        clickCount = 0;
        removeRight(id);
    }
}

function removeRight(id){
   
    client.rights.destroy(id).done(function(data) {
        getLeft();
        getRight();
      }); 
}

function toRight(){
    if(selected_left_id==0) alert("Please select left item first");
    addRight(selected_left_id);
    selected_left_id=0;
    $('#right-button').prop('disabled', true);
}

function toLeft(){
    if(selected_right_id==0) alert("Please select right item first");
    removeRight(selected_right_id);
    selected_right_id=0;
    $('#left-button').prop('disabled', true);
}

function submit(){
    var request = client.rights.read();
    // GET /rest/api/foo/
    request.done(function (data, textStatus, xhrObject){
        var content='';
        $.each(data.data, function(index) {
            content += data.data[index].content;
        });
        if(data.data.length==0)
        {
            alert("Please select at least 1 item");
        } 
        $('#result').val(content);
    });  
}

