var tbl =  $('#userdatatable').DataTable({

    "processing": true,
    "serverSide": true,
    "searching": true,
    "displayLength": 25,
    "order": [[0, "desc"]],
    "lengthMenu": [7, 10, 25, 50, 75, 100],
    "ajax":{
             "url": Asset+"users-list",
             "dataType": "json",
             "type": "POST",
             "data":{ _token: $('meta[name="csrf-token"]').attr('content')}
           },
    "columns": [
        {"data": "id" ,"orderable": false},
        { "data": "name" },
        { "data": "email" },
        { "data": "role" },        
        { "data": "action","orderable": false }
    ],


});