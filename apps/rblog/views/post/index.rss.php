<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<rss xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:sy="http://purl.org/rss/1.0/modules/syndication/" xmlns:admin="http://webns.net/mvcb/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:content="http://purl.org/rss/1.0/modules/content/" version="2.0">
    <channel>
        <title>reeze</title>
        <link><?php echo url_for('@homepage', true); ?></link>
        <description/>
        <language>en</language>
        <copyright>Copyright 2009</copyright>
        <generator>http://www.sixapart.com/movabletype/</generator>
        <docs>http://blogs.law.harvard.edu/tech/rss</docs>
        <admin:errorReportsTo rdf:resource="mailto:dbanotes@gmail.com"/>
        <?php foreach ($posts as $post): ?>
        <item>
            <title><?php echo $post['title'] ?></title>
            <description><![CDATA[<?php echo $post['title'] ?>]]></description>
            <link><?php echo url_for($post['title'], "@show_post?year=2009&month=10&day=15&slug={$post['slug']}", true); ?> />
              <summary type="html"><![CDATA[<?php echo $post['text'] ?></link>
            <author>reeze.xia@gmail.com</author>
            <guid>    <?php echo url_for($post['title'], "@show_post?year=2009&month=10&day=15&slug={$post['slug']}", true); ?> />
                  <summary type="html"><![CDATA[<?php echo $post['text'] ?></guid>
            <content:encoded><![CDATA[<?php echo $post['text'] ?>]]></content:encoded>
            <pubDate><?php echo $post['created_at'] ?></pubDate>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>