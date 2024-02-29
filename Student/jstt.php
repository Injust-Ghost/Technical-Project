<html>
    <head>
        <style>
            a
            {
                text-decoration: none;
                color: black;
            }
        </style>
    </head>
    <table border="1" width="100%" height="100%">
        <thead>
            <tr>
                <td>TIME/DAY</td>
                <td>MONDAY</td>
                <td>TUESDAY</td>
                <td>WEDNESDAY</td>
                <td>THURSDAY</td>
                <td>FRIDAY</td>
                <td>SATURDAY</td>
            </tr>
        </thead>
        <?php
            echo "<tbody>
            <script>
                let x=8;
                for(let i=1;i<=10;i++)
                {
                    document.write('<tr>');
                    document.write('<td>',x,'-',x+1,'</td>');
                    for(let j=1;j<=6;j++)
                    {
                        document.write('<td></td>')
                    }
                    x=x+1;
                }
            </script>
            </tbody>";
        ?>
    </table>
</html>