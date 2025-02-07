            <table>
                <tr>
                    <th>Azonosító</th>
                    <th>Cím</th>
                    <th>Szerző</th>
                    <th>Kiadó</th>
                    <th>Ár</th>
                    <th>Kedvezményes Ár</th>
                </tr>
                <?foreach($result as $item):?>    
                <tr align="center">
                    <td><?=$item['id']?></td>
                    <td><?=$item['title']?></td>
                    <td><?=$item['author']?></td>
                    <td><?=$item['publisher']?></td>
                    <td><?=$item['price']?></td>
                    <td><?=$item['discprice']?></td>
                </tr>
                <?endforeach?>                
            </table>
            <table>
                <tr>
                    <th align="left">Kedvezmények nélkül összesített érték</th>
                    <td align="right"><?=$sumprice?></td>
                </tr>    
                <tr>
                    <th align="left">Kedvezmények összértéke</th>
                    <td align="right"><?=$sumdiscount?></td>
                </tr>    
                <tr>
                    <th align="left">Kedvezményel csökkentett végösszeg</th>
                    <td align="right"><?=$sumdiscprice?></td>
                </tr>
            </table>
