<html>

<head>
    <style>
        /** 
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
        @page {
            margin: 0px;
            margin-bottom: <?php echo $footer_height  . "px;"  ?>;
            counter-increment: page;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: <?php echo $title_height + $header_height  . "px;"  ?>;
        }

        /** Define the header rules **/
        page-title :first {
            position: fixed;
            padding: 0px;
            top: 0;
            left: 0px;
            right: 0px;
            height: <?php echo $title_height  . "px;"  ?>;
            border: 1px solid black;
        }


        page-header {
            position: fixed;
            top: <?php echo $title_height  . "px;"  ?>;
            left: 0px;
            right: 0px;
            padding: 0px;
            height: <?php echo $header_height  . "px;"  ?>;
            /*border: 1px solid black;*/
        }


        /** Define the footer rules **/
        page-footer {
            position: fixed;
            width: 100%;
            height: <?php echo $footer_height . "px;"  ?>;
            bottom: <?php echo $footer_bottom . "px;"  ?>;
            /*border: 1px solid black;*/
        }

        page-footer :after {
            content: counter(page);
        }
    </style>
</head>

<body>
    <!-- Define header and footer blocks before your content -->
    <page-title>
        <?php echo $title_content ?>
    </page-title>
    <page-header>
        <?php echo $header_content ?>
    </page-header>

    <page-footer>
        <?php echo $footer_content ?>
    </page-footer>

    <!-- Wrap the content of your PDF inside a page-detail tag -->
    <page-detail>
        <?php echo $detail_content ?>
    </page-detail>
</body>

</html>