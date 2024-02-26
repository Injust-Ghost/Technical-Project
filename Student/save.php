echo   "<tbody>
            <script>
                x=8;
                for(i=1;i<=10;i++)
                {
                    document.write("<tr>")
                    document.write("<td>",x,"-",x+1,"</td>")
                    for(j=1;j<=6;j++)
                    {
                        document.write("<td></td>")
                    }
                    x=x+1;
                }
            </script>
            </tbody>";