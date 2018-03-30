SELECT users.firstname, users.lastname, articles.title, articles.content, articles.picture, articles.date_publish
FROM users
INNER JOIN articles
ON users.id = articles.id_user
WHERE article.id = 10