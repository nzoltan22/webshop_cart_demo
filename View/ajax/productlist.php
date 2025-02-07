            <tr>
                <th>Azonosító</th>
                <th>Cím</th>
                <th>Szerző</th>
                <th>Kiadó</th>
                <th>Ár</th>
                <th>Kedvezményes Ár</th>
                <th>&nbsp</th>
            </tr>
            <?foreach($result as $item):?>    
            <tr align="center">
                <td><?=$item['id']?></td>
                <td><?=$item['title']?></td>
                <td><?=$item['author']?></td>
                <td><?=$item['publisher']?></td>
                <td><?=$item['price']?></td>
                <td><?=$item['discprice']?></td>
                <td><a href="javascript:addcart('<?=$item['id']?>','<?=$item['title']?>','<?=$item['author']?>','<?=$item['publisher']?>','<?=$item['price']?>','<?=$item['discprice']?>')">kosar</a></td>
            </tr>
            <?endforeach?>    