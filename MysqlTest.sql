SELECT parent.id, parent.UserName, child.UserName as `ParentUserName`
    FROM USERS AS parent
         LEFT JOIN USERS AS child
         ON child.parent = parent.id
ORDER BY parent.id, child.id;