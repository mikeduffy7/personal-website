var list = [];

let TODO = (function(){
    var add = function(){
        var task = {
            Title: "",
            Description: ""
        };
        
        var title = document.getElementById('todo-title').value;
        var description = document.getElementById('todo-description').value;
        
        task.Title = title;
        task.Description = description;

        list.push(task);
        console.log(list);
    }
    
    return {
        add: add
    }
})();





