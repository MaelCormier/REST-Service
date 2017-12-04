# REST-Service

Built with Symfony 3

Bundles : FOSRest, Nelmio ApiDoc, PagerFanta. 

Production-ready simple REST API for searching in all Github code.

API documentation :

GET "/results" : Get the list of all results.

Parameters :

"search"	
Description:	Keyword searched.
Default:	""

"limit"	
Requirement:	\d+
Description:	Max number of results per page.
Default:	25

"page"	
Requirement:	\d+
Description:	The current pagination.
Default:	1

"sort"	
Requirement:	stars|forks|updated
Description:	The sort field (stars, forks or updated).
Default:	stars
