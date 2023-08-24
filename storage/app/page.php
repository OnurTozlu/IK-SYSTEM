$sorgu = mysql_query(‘select * from tablo’)

$top_sayfa = ceil(mysql_num_rows($sorgu) / 12);