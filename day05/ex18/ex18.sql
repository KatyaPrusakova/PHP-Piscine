SELECT `name` FROM `distrib`
WHERE
`id_distrib` BETWEEN 62 AND 69 OR
`id_distrib` IN (42, 71, 88, 89, 90) 
OR (LENGTH(name) - LENGTH(replace(name, 'Y', '')) = 2)
LIMIT 2, 5;