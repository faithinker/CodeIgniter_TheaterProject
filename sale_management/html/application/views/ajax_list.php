<? $tmp = $text1 ? "/text1/$text1/page/$page" : "/page/$page"; ?>
<script>
    function find_text()
    {
        if (!form1.text1.value)       // 값이 없는 경우, 전체 자료
			form1.action="/~sale8/ajax/lists/page";
		else                                    // 값이 있는 경우, text1 값 전달
			form1.action="/~sale8/ajax/lists/text1/" + form1.text1.value+"/page";
		form1.submit();
    }
	$(function() {
		$("#ajax_add").click(function() {
			var name8=$("#name8").val();
			$.ajax( {
				url:"/~sale8/ajax/ajax_insert",
				type:"POST",
				data: {
					"name8":name8
				},
				dataType:"html",
				complete:function(xhr,textStatus) {
					var no8=xhr.responseText;

					$("#table_list").append(
						"<tr id='rowno"+no8+"'>"+
						"<td>"+no8+"</td>"+
						"<td><a href='#collapseExampleEdit' data-toggle='collapse' class='ajax_edit' aria-expanded='false' aria-controls='collapseExampleEdit' data-no='"+no8+"' data-name='"+name8+"'>"+name8+"</a></td>"+
						"<td><a href='#' rowno='"+no8+"' class='ajax_del btn btn-sm mycolor1' onClick='javascript:confirm(\"삭제할까요?\");'>삭제</a></td>"+
						"</tr>");
					$("#name8").val("");
				}
			});
			$("#collapseExample").collapse("hide");
		});
		$("#ajax_edit").click(function() {
			var no8=$("#edit_no8").val();
			var name8=$("#edit_name8").val();
			$.ajax( {
				url:"/~sale8/ajax/ajax_update",
				type:"POST",
				data: {
					"no":no8,
					"name8":name8
				},
				dataType:"html",
				complete:function(xhr,textStatus) {
					$("#rowno"+no8).replaceWith(
						"<tr id='rowno"+no8+"'>"+
						"<td>"+no8+"</td>"+
						"<td><a href='#collapseExampleEdit' data-toggle='collapse' class='ajax_edit' aria-expanded='false' aria-controls='collapseExampleEdit' data-no='"+no8+"' data-name='"+name8+"'>"+name8+"</a></td>"+
						"<td><a href='#' rowno='"+no8+"' class='ajax_del btn btn-sm mycolor1' onClick='javascript:confirm(\"삭제할까요?\");'>삭제</a></td>"+
						"</tr>");
					$("#name8").val("");
				}
			});
			$("#collapseExampleEdit").collapse("hide");
		});
		$("#table_list").on("click",".ajax_del",function() {
			$.ajax( {
				url:"/~sale8/ajax/ajax_delete",
				type:"POST",
				data: {
					"no8":$(this).attr("rowno")
				},
				dataType:"text",
				complete:function(xhr,textStatus) {
					var no8=xhr.responseText;
					$('#rowno'+no8).remove();
				}
			});
		});
	});
$(document).on('click', '.ajax_add', function() {
			$("#collapseExampleEdit").collapse('hide');
        });
$(document).on('click', '.ajax_edit', function() {
	$("#collapseExample").collapse('hide');
	$('#edit_no8').val( $(this).data('no') );
	$('#edit_name8').val( $(this).data('name') );
});
</script>
</head>
<body>
    
		<br>
			<div class="alert mycolor1" role="alert">Ajax 구분</div>
			<form name="form1" action="" method="post">
    <div class="row">
        <div class="col-3" align="left">            
<div class="input-group  input-group-sm">
    <div class="input-group-prepend">
        <span class="input-group-text">이름</span>
    </div>
    <input type="text" name="text1" value="<?=$text1;?>"class="form-control" onKeydown="if (event.keyCode == 8) { find_text(); }" >
    <div class="input-group-append">
        <button class="btn  btn-primary" type="button" onClick="find_text();">검색</button>
    </div>
</div>
        </div>
        <div class="col-9" align="right">           
  <a href="#collapseExample" data-toggle="collapse" aria-expanded="false" aria-controls="collapseExample" class="ajax_add btn btn-sm mycolor1">추가</a>
        </div>
    </div>
		</form>
	<table class="table table-bordered table-sm mymargin5" id="table_list">
    <tr class="mycolor2">
        <td width="10%">번호</td>
        <td width="80%">이름</td>
		<td width="10%">삭제</td>
    </tr>
<?
    foreach ($list as $row)                             // 연관배열 list를 row를 통해 출력한다.
    {
        $no=$row->no8;                                    // 사용자번호
?>
<tr id="rowno<?=$no;?>">
    <td><?=$no; ?></td>
    <td><a href="#collapseExampleEdit" data-toggle="collapse" class="ajax_edit" aria-expanded="false" aria-controls="collapseExampleEdit" data-no="<?=$no;?>" data-name="<?=$row->name8;?>"><?=$row->name8;?></td>
	<td>
		<a href="#" rowno="<?=$no;?>" class="ajax_del btn btn-sm mycolor1" onClick="javascript:confirm('삭제할까요?');">삭제<a>
	</td>
</tr>
<?
    }
?>
</table>
<div class="collapse mymargin5" id="collapseExample">
  <div class="card card-body" style="padding:0px 5px 0px 5px;">
  	<table class="table table-sm table-bordered mymargin5 alert-primary">
		<form name="form2">
			<tr>
				<td width="10%"></td>
				<td width="80%">
					<input type="text" name="name8" value="" class="form-control form-control-sm" id="name8">
				</td>
				<td width="10%" style="vertical-align:middle">
					<a href="#" id="ajax_add" class="btn btn-sm btn-primary">저장</a>
				<td>
			</tr>
		<form>
	</table>
  </div>
</div>
<div class="collapse mymargin5" id="collapseExampleEdit">
		<div class="card card-body" style="padding:0px 5px 0px 5px;">
			<table class="table table-sm table-bordered alert-primary mymargin5">
				<form name="form3">
				<tr>
					<td width="10%">
						<input type="text" name="no8" value="" disabled
							 class="form-control form-control-sm" id="edit_no8" >
					</td>
					<td width="80%">
						<input type="text" name="name8" value="" 
							 class="form-control form-control-sm" id="edit_name8" >
					</td>
					<td width="10%" style="vertical-align:middle">
						<input type="button" id="ajax_edit" value="수정" class="btn btn-sm btn-primary">
					</td>
				</tr>
				</form>
			</table>
		</div>
	</div>	
<?=$pagination; ?>
