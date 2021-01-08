



swagger-codegen generate -l php \
	-i tripletex-v2-swagger.json \
	-c tripletex-swag-codegen-config.json  \
	--remove-operation-id-prefix=true \
	-o .

