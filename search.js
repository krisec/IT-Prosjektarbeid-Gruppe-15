$(document).on("keyup",".search-table", function () {
                var value = $(this).val();
                $("table tr").each(function (index) {
                    $row = $(this);
                    $row.show();
                    if (index !== 0 && value) {
                        var found = false;
                        $row.find("td").each(function () {
                            var cell = $(this).text();
                            if (cell.indexOf(value) >= 0 || cell.indexOf(value.toLowerCase) >= 0 || cell.indexOf(value.toUpperCase) >= 0) {
                                found = true;
                                return;
                            } 
                        });
                        if (found === true) {
                            $row.show();
                        }
                        else {
                            $row.hide();
                        }
                    }
          });
   });
