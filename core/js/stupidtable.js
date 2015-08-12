(function($){$.fn.stupidtable=function(sortFns){return this.each(function(){var $table=$(this);sortFns=sortFns||{};sortFns=$.extend({},$.fn.stupidtable.default_sort_fns, sortFns);$table.data('sortFns',sortFns);$table.on("click.stupidtable","thead th",function(){$(this).stupidsort()})})};$.fn.stupidsort=function(force_direction){var $this_th=$(this);var th_index=0;var dir=$.fn.stupidtable.dir;var $table=$this_th.closest("table");var datatype=$this_th.data("sort")||null;if(datatype===null){return}$this_th.parents("tr").find("th").slice(0,$(this).index()).each(function(){var cols=$(this).attr("colspan")||1;th_index+=parseInt(cols,10)});var sort_dir;if(arguments.length==1){sort_dir=force_direction}else{sort_dir=force_direction||$this_th.data("sort-default")||dir.ASC;if($this_th.data("sort-dir"))sort_dir=$this_th.data("sort-dir")===dir.ASC?dir.DESC:dir.ASC}$table.trigger("beforetablesort",{column:th_index, direction:sort_dir});$table.css("display");setTimeout(function(){var column=[];var sortFns=$table.data('sortFns');var sortMethod=sortFns[datatype];var trs=$table.children("tbody").children("tr");trs.each(function(index,tr){var $e=$(tr).children().eq(th_index);var sort_val=$e.data("sort-value");if(typeof(sort_val)==="undefined"){var txt=$e.text();$e.data('sort-value',txt);sort_val=txt}column.push([sort_val,tr])});column.sort(function(a,b){return sortMethod(a[0],b[0])});if(sort_dir!=dir.ASC)column.reverse();trs=$.map(column,function(kv){return kv[1]});$table.children("tbody").append(trs);$table.find("th").data("sort-dir",null).removeClass("sorting-desc sorting-asc");$this_th.data("sort-dir",sort_dir).addClass("sorting-"+sort_dir);$table.trigger("aftertablesort",{column:th_index,direction: sort_dir});$table.css("display")},10);return$this_th};$.fn.updateSortVal=function(new_sort_val){var $this_td=$(this);if($this_td.is('[data-sort-value]')){$this_td.attr('data-sort-value',new_sort_val)}$this_td.data("sort-value",new_sort_val);return$this_td};$.fn.stupidtable.dir={ASC:"asc",DESC:"desc"};$.fn.stupidtable.default_sort_fns={"int":function(a,b){return parseInt(a,10)-parseInt(b,10)},"float":function(a,b){return parseFloat(a)-parseFloat(b)},"string":function(a,b){return a.localeCompare(b)},"string-ins":function(a,b){a=a.toLocaleLowerCase();b=b.toLocaleLowerCase();return a.localeCompare(b)}}})(jQuery);