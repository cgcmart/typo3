<?php

########################################################################
# Extension Manager/Repository config file for ext "extbase".
#
# Auto generated 25-11-2009 23:21
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'A Framework for Extensions',
	'description' => 'A framework to build extensions in the style of FLOW3 by now.',
	'category' => 'misc',
	'author' => 'TYPO3 core team',
	'author_email' => '',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => 'top',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.3.0alpha2',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.4.0-0.0.0'
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'_md5_values_when_last_written' => 'a:278:{s:17:"RELEASE_NOTES.txt";s:4:"a3ac";s:16:"ext_autoload.php";s:4:"5b90";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"6130";s:14:"ext_tables.php";s:4:"6271";s:14:"ext_tables.sql";s:4:"c6a7";s:24:"ext_typoscript_setup.txt";s:4:"f395";s:14:"svn-commit.tmp";s:4:"aa6b";s:22:"Classes/Dispatcher.php";s:4:"05f1";s:21:"Classes/Exception.php";s:4:"c346";s:54:"Classes/Configuration/AbstractConfigurationManager.php";s:4:"9a4c";s:53:"Classes/Configuration/BackendConfigurationManager.php";s:4:"1741";s:35:"Classes/Configuration/Exception.php";s:4:"31e6";s:54:"Classes/Configuration/FrontendConfigurationManager.php";s:4:"660e";s:53:"Classes/Configuration/Exception/ContainerIsLocked.php";s:4:"a34d";s:60:"Classes/Configuration/Exception/InvalidConfigurationType.php";s:4:"e100";s:46:"Classes/Configuration/Exception/NoSuchFile.php";s:4:"ba93";s:48:"Classes/Configuration/Exception/NoSuchOption.php";s:4:"1369";s:46:"Classes/Configuration/Exception/ParseError.php";s:4:"da56";s:37:"Classes/Domain/Model/FrontendUser.php";s:4:"bf08";s:42:"Classes/Domain/Model/FrontendUserGroup.php";s:4:"f606";s:57:"Classes/Domain/Repository/FrontendUserGroupRepository.php";s:4:"0b75";s:52:"Classes/Domain/Repository/FrontendUserRepository.php";s:4:"82e9";s:45:"Classes/DomainObject/AbstractDomainObject.php";s:4:"4df2";s:39:"Classes/DomainObject/AbstractEntity.php";s:4:"de7f";s:44:"Classes/DomainObject/AbstractValueObject.php";s:4:"42f0";s:46:"Classes/DomainObject/DomainObjectInterface.php";s:4:"9977";s:23:"Classes/Error/Error.php";s:4:"d136";s:25:"Classes/MVC/Exception.php";s:4:"606f";s:23:"Classes/MVC/Request.php";s:4:"f11e";s:32:"Classes/MVC/RequestInterface.php";s:4:"09c5";s:24:"Classes/MVC/Response.php";s:4:"1f30";s:33:"Classes/MVC/ResponseInterface.php";s:4:"3c5e";s:45:"Classes/MVC/Controller/AbstractController.php";s:4:"e6d6";s:43:"Classes/MVC/Controller/ActionController.php";s:4:"b987";s:35:"Classes/MVC/Controller/Argument.php";s:4:"b82f";s:40:"Classes/MVC/Controller/ArgumentError.php";s:4:"501b";s:36:"Classes/MVC/Controller/Arguments.php";s:4:"20ff";s:45:"Classes/MVC/Controller/ArgumentsValidator.php";s:4:"e859";s:44:"Classes/MVC/Controller/ControllerContext.php";s:4:"dc69";s:46:"Classes/MVC/Controller/ControllerInterface.php";s:4:"99d2";s:40:"Classes/MVC/Controller/FlashMessages.php";s:4:"ef89";s:38:"Classes/MVC/Exception/InfiniteLoop.php";s:4:"7f60";s:43:"Classes/MVC/Exception/InvalidActionName.php";s:4:"73e8";s:45:"Classes/MVC/Exception/InvalidArgumentName.php";s:4:"e66f";s:45:"Classes/MVC/Exception/InvalidArgumentType.php";s:4:"766c";s:46:"Classes/MVC/Exception/InvalidArgumentValue.php";s:4:"b8fc";s:43:"Classes/MVC/Exception/InvalidController.php";s:4:"2819";s:47:"Classes/MVC/Exception/InvalidControllerName.php";s:4:"a435";s:46:"Classes/MVC/Exception/InvalidExtensionName.php";s:4:"ed0e";s:39:"Classes/MVC/Exception/InvalidMarker.php";s:4:"848e";s:48:"Classes/MVC/Exception/InvalidOrNoRequestHash.php";s:4:"124a";s:46:"Classes/MVC/Exception/InvalidRequestMethod.php";s:4:"1a40";s:44:"Classes/MVC/Exception/InvalidRequestType.php";s:4:"2b21";s:49:"Classes/MVC/Exception/InvalidTemplateResource.php";s:4:"4655";s:43:"Classes/MVC/Exception/InvalidUriPattern.php";s:4:"adfa";s:43:"Classes/MVC/Exception/InvalidViewHelper.php";s:4:"fa39";s:38:"Classes/MVC/Exception/NoSuchAction.php";s:4:"c917";s:40:"Classes/MVC/Exception/NoSuchArgument.php";s:4:"6f97";s:42:"Classes/MVC/Exception/NoSuchController.php";s:4:"b3e6";s:36:"Classes/MVC/Exception/StopAction.php";s:4:"e705";s:48:"Classes/MVC/Exception/UnsupportedRequestType.php";s:4:"1c56";s:33:"Classes/MVC/View/AbstractView.php";s:4:"0ac2";s:30:"Classes/MVC/View/EmptyView.php";s:4:"00cd";s:34:"Classes/MVC/View/ViewInterface.php";s:4:"a38b";s:27:"Classes/MVC/Web/Request.php";s:4:"1934";s:34:"Classes/MVC/Web/RequestBuilder.php";s:4:"0954";s:28:"Classes/MVC/Web/Response.php";s:4:"9564";s:38:"Classes/MVC/Web/Routing/UriBuilder.php";s:4:"1ddb";s:28:"Classes/Object/Exception.php";s:4:"bab4";s:26:"Classes/Object/Manager.php";s:4:"c356";s:35:"Classes/Object/ManagerInterface.php";s:4:"7b3c";s:36:"Classes/Object/RegistryInterface.php";s:4:"2389";s:36:"Classes/Object/TransientRegistry.php";s:4:"6170";s:46:"Classes/Object/Exception/CannotBuildObject.php";s:4:"1147";s:53:"Classes/Object/Exception/CannotReconstituteObject.php";s:4:"b920";s:41:"Classes/Object/Exception/InvalidClass.php";s:4:"21b7";s:42:"Classes/Object/Exception/InvalidObject.php";s:4:"03bb";s:55:"Classes/Object/Exception/InvalidObjectConfiguration.php";s:4:"dff6";s:52:"Classes/Object/Exception/ObjectAlreadyRegistered.php";s:4:"9e39";s:41:"Classes/Object/Exception/UnknownClass.php";s:4:"7db3";s:45:"Classes/Object/Exception/UnknownInterface.php";s:4:"8571";s:42:"Classes/Object/Exception/UnknownObject.php";s:4:"cc13";s:51:"Classes/Object/Exception/UnresolvedDependencies.php";s:4:"174b";s:39:"Classes/Object/Exception/WrongScope.php";s:4:"d2ca";s:31:"Classes/Persistence/Backend.php";s:4:"f781";s:40:"Classes/Persistence/BackendInterface.php";s:4:"36cf";s:33:"Classes/Persistence/Exception.php";s:4:"1713";s:35:"Classes/Persistence/IdentityMap.php";s:4:"fe01";s:41:"Classes/Persistence/IteratorInterface.php";s:4:"d179";s:40:"Classes/Persistence/LazyLoadingProxy.php";s:4:"3bf9";s:41:"Classes/Persistence/LazyObjectStorage.php";s:4:"1101";s:48:"Classes/Persistence/LoadingStrategyInterface.php";s:4:"d4ed";s:31:"Classes/Persistence/Manager.php";s:4:"ef11";s:40:"Classes/Persistence/ManagerInterface.php";s:4:"d304";s:37:"Classes/Persistence/ObjectStorage.php";s:4:"e737";s:36:"Classes/Persistence/PropertyType.php";s:4:"3dbb";s:29:"Classes/Persistence/Query.php";s:4:"ff46";s:36:"Classes/Persistence/QueryFactory.php";s:4:"f4a3";s:45:"Classes/Persistence/QueryFactoryInterface.php";s:4:"a61d";s:38:"Classes/Persistence/QueryInterface.php";s:4:"4685";s:35:"Classes/Persistence/QueryResult.php";s:4:"02b3";s:44:"Classes/Persistence/QueryResultInterface.php";s:4:"eb10";s:46:"Classes/Persistence/QuerySettingsInterface.php";s:4:"132b";s:37:"Classes/Persistence/RangeIterator.php";s:4:"04fa";s:46:"Classes/Persistence/RangeIteratorInterface.php";s:4:"28bd";s:34:"Classes/Persistence/Repository.php";s:4:"b26e";s:43:"Classes/Persistence/RepositoryInterface.php";s:4:"164f";s:27:"Classes/Persistence/Row.php";s:4:"c6ce";s:36:"Classes/Persistence/RowInterface.php";s:4:"6b5a";s:35:"Classes/Persistence/RowIterator.php";s:4:"e493";s:44:"Classes/Persistence/RowIteratorInterface.php";s:4:"3997";s:31:"Classes/Persistence/Session.php";s:4:"43b4";s:42:"Classes/Persistence/Typo3QuerySettings.php";s:4:"4629";s:51:"Classes/Persistence/Typo3QuerySettingsInterface.php";s:4:"08f2";s:29:"Classes/Persistence/Value.php";s:4:"0efb";s:36:"Classes/Persistence/ValueFactory.php";s:4:"ea2b";s:45:"Classes/Persistence/ValueFactoryInterface.php";s:4:"0a49";s:38:"Classes/Persistence/ValueInterface.php";s:4:"a11c";s:56:"Classes/Persistence/Exception/CleanStateNotMemorized.php";s:4:"7689";s:51:"Classes/Persistence/Exception/IllegalObjectType.php";s:4:"73e7";s:46:"Classes/Persistence/Exception/InvalidClass.php";s:4:"761b";s:53:"Classes/Persistence/Exception/InvalidPropertyType.php";s:4:"cd9a";s:48:"Classes/Persistence/Exception/MissingBackend.php";s:4:"1d0d";s:53:"Classes/Persistence/Exception/RepositoryException.php";s:4:"d09e";s:42:"Classes/Persistence/Exception/TooDirty.php";s:4:"3347";s:57:"Classes/Persistence/Exception/UnexpectedTypeException.php";s:4:"5b57";s:47:"Classes/Persistence/Exception/UnknownObject.php";s:4:"21a6";s:51:"Classes/Persistence/Exception/UnsupportedMethod.php";s:4:"9915";s:50:"Classes/Persistence/Exception/UnsupportedOrder.php";s:4:"f4b9";s:54:"Classes/Persistence/Exception/ValueFormatException.php";s:4:"0d30";s:40:"Classes/Persistence/Mapper/ColumnMap.php";s:4:"801f";s:38:"Classes/Persistence/Mapper/DataMap.php";s:4:"901d";s:41:"Classes/Persistence/Mapper/DataMapper.php";s:4:"544a";s:40:"Classes/Persistence/QOM/AndInterface.php";s:4:"ae8d";s:45:"Classes/Persistence/QOM/BindVariableValue.php";s:4:"f52e";s:54:"Classes/Persistence/QOM/BindVariableValueInterface.php";s:4:"eb03";s:38:"Classes/Persistence/QOM/Comparison.php";s:4:"afdc";s:47:"Classes/Persistence/QOM/ComparisonInterface.php";s:4:"10ac";s:47:"Classes/Persistence/QOM/ConstraintInterface.php";s:4:"3b4b";s:42:"Classes/Persistence/QOM/DynamicOperand.php";s:4:"5266";s:51:"Classes/Persistence/QOM/DynamicOperandInterface.php";s:4:"91b0";s:45:"Classes/Persistence/QOM/EquiJoinCondition.php";s:4:"35c2";s:54:"Classes/Persistence/QOM/EquiJoinConditionInterface.php";s:4:"b873";s:32:"Classes/Persistence/QOM/Join.php";s:4:"4c13";s:50:"Classes/Persistence/QOM/JoinConditionInterface.php";s:4:"4b8d";s:41:"Classes/Persistence/QOM/JoinInterface.php";s:4:"144a";s:38:"Classes/Persistence/QOM/LogicalAnd.php";s:4:"a250";s:38:"Classes/Persistence/QOM/LogicalNot.php";s:4:"75e9";s:37:"Classes/Persistence/QOM/LogicalOr.php";s:4:"6da2";s:37:"Classes/Persistence/QOM/LowerCase.php";s:4:"93e4";s:46:"Classes/Persistence/QOM/LowerCaseInterface.php";s:4:"e093";s:40:"Classes/Persistence/QOM/NotInterface.php";s:4:"0ec5";s:35:"Classes/Persistence/QOM/Operand.php";s:4:"7efd";s:44:"Classes/Persistence/QOM/OperandInterface.php";s:4:"1928";s:39:"Classes/Persistence/QOM/OrInterface.php";s:4:"9cf8";s:36:"Classes/Persistence/QOM/Ordering.php";s:4:"8427";s:45:"Classes/Persistence/QOM/OrderingInterface.php";s:4:"c949";s:41:"Classes/Persistence/QOM/PropertyValue.php";s:4:"5905";s:50:"Classes/Persistence/QOM/PropertyValueInterface.php";s:4:"80ef";s:44:"Classes/Persistence/QOM/QueryObjectModel.php";s:4:"ac1a";s:62:"Classes/Persistence/QOM/QueryObjectModelConstantsInterface.php";s:4:"5b34";s:51:"Classes/Persistence/QOM/QueryObjectModelFactory.php";s:4:"6c37";s:60:"Classes/Persistence/QOM/QueryObjectModelFactoryInterface.php";s:4:"3c82";s:53:"Classes/Persistence/QOM/QueryObjectModelInterface.php";s:4:"fa26";s:36:"Classes/Persistence/QOM/Selector.php";s:4:"e942";s:45:"Classes/Persistence/QOM/SelectorInterface.php";s:4:"5afa";s:43:"Classes/Persistence/QOM/SourceInterface.php";s:4:"0885";s:37:"Classes/Persistence/QOM/Statement.php";s:4:"d687";s:46:"Classes/Persistence/QOM/StatementInterface.php";s:4:"ec99";s:41:"Classes/Persistence/QOM/StaticOperand.php";s:4:"a244";s:50:"Classes/Persistence/QOM/StaticOperandInterface.php";s:4:"a163";s:37:"Classes/Persistence/QOM/UpperCase.php";s:4:"9d77";s:46:"Classes/Persistence/QOM/UpperCaseInterface.php";s:4:"bfc0";s:48:"Classes/Persistence/Storage/BackendInterface.php";s:4:"2e02";s:46:"Classes/Persistence/Storage/Typo3DbBackend.php";s:4:"82a4";s:55:"Classes/Persistence/Storage/Exception/BadConstraint.php";s:4:"3a87";s:50:"Classes/Persistence/Storage/Exception/SqlError.php";s:4:"850b";s:30:"Classes/Property/Exception.php";s:4:"e64b";s:27:"Classes/Property/Mapper.php";s:4:"1dea";s:35:"Classes/Property/MappingResults.php";s:4:"abac";s:49:"Classes/Property/Exception/FormatNotSupported.php";s:4:"50b1";s:46:"Classes/Property/Exception/InvalidDataType.php";s:4:"76ad";s:44:"Classes/Property/Exception/InvalidFormat.php";s:4:"432e";s:46:"Classes/Property/Exception/InvalidProperty.php";s:4:"e4c0";s:44:"Classes/Property/Exception/InvalidSource.php";s:4:"4067";s:44:"Classes/Property/Exception/InvalidTarget.php";s:4:"5bc8";s:38:"Classes/Reflection/ClassReflection.php";s:4:"4763";s:34:"Classes/Reflection/ClassSchema.php";s:4:"5cb7";s:39:"Classes/Reflection/DocCommentParser.php";s:4:"fd1a";s:32:"Classes/Reflection/Exception.php";s:4:"ec59";s:39:"Classes/Reflection/MethodReflection.php";s:4:"32fd";s:35:"Classes/Reflection/ObjectAccess.php";s:4:"0c55";s:42:"Classes/Reflection/ParameterReflection.php";s:4:"351b";s:41:"Classes/Reflection/PropertyReflection.php";s:4:"d5fd";s:30:"Classes/Reflection/Service.php";s:4:"3a7e";s:52:"Classes/Reflection/Exception/InvalidPropertyType.php";s:4:"82e0";s:30:"Classes/Security/Exception.php";s:4:"3b45";s:47:"Classes/Security/Channel/RequestHashService.php";s:4:"77bb";s:45:"Classes/Security/Cryptography/HashService.php";s:4:"91ca";s:63:"Classes/Security/Exception/InvalidArgumentForHashGeneration.php";s:4:"8d5c";s:70:"Classes/Security/Exception/InvalidArgumentForRequestHashGeneration.php";s:4:"81bd";s:60:"Classes/Security/Exception/SyntacticallyWrongRequestHash.php";s:4:"23d0";s:26:"Classes/Utility/Arrays.php";s:4:"587b";s:25:"Classes/Utility/Cache.php";s:4:"2501";s:31:"Classes/Utility/ClassLoader.php";s:4:"4d60";s:44:"Classes/Utility/ExtbaseRequirementsCheck.php";s:4:"46d3";s:29:"Classes/Utility/Extension.php";s:4:"5cf5";s:32:"Classes/Utility/Localization.php";s:4:"446f";s:30:"Classes/Utility/TypoScript.php";s:4:"5bdc";s:28:"Classes/Validation/Error.php";s:4:"247a";s:32:"Classes/Validation/Exception.php";s:4:"44f8";s:36:"Classes/Validation/PropertyError.php";s:4:"3267";s:40:"Classes/Validation/ValidatorResolver.php";s:4:"86c9";s:47:"Classes/Validation/Exception/InvalidSubject.php";s:4:"5040";s:63:"Classes/Validation/Exception/InvalidValidationConfiguration.php";s:4:"9cfa";s:57:"Classes/Validation/Exception/InvalidValidationOptions.php";s:4:"a3a8";s:48:"Classes/Validation/Exception/NoSuchValidator.php";s:4:"64f4";s:49:"Classes/Validation/Exception/NoValidatorFound.php";s:4:"be96";s:59:"Classes/Validation/Validator/AbstractCompositeValidator.php";s:4:"7eaf";s:56:"Classes/Validation/Validator/AbstractObjectValidator.php";s:4:"cd9a";s:50:"Classes/Validation/Validator/AbstractValidator.php";s:4:"8477";s:54:"Classes/Validation/Validator/AlphanumericValidator.php";s:4:"315b";s:53:"Classes/Validation/Validator/ConjunctionValidator.php";s:4:"d60b";s:50:"Classes/Validation/Validator/DateTimeValidator.php";s:4:"2791";s:53:"Classes/Validation/Validator/DisjunctionValidator.php";s:4:"d964";s:54:"Classes/Validation/Validator/EmailAddressValidator.php";s:4:"a42e";s:47:"Classes/Validation/Validator/FloatValidator.php";s:4:"8122";s:55:"Classes/Validation/Validator/GenericObjectValidator.php";s:4:"2a06";s:49:"Classes/Validation/Validator/IntegerValidator.php";s:4:"d60c";s:50:"Classes/Validation/Validator/NotEmptyValidator.php";s:4:"3169";s:53:"Classes/Validation/Validator/NumberRangeValidator.php";s:4:"8374";s:48:"Classes/Validation/Validator/NumberValidator.php";s:4:"cd21";s:57:"Classes/Validation/Validator/ObjectValidatorInterface.php";s:4:"e28e";s:45:"Classes/Validation/Validator/RawValidator.php";s:4:"a4e6";s:59:"Classes/Validation/Validator/RegularExpressionValidator.php";s:4:"34cb";s:54:"Classes/Validation/Validator/StringLengthValidator.php";s:4:"246b";s:48:"Classes/Validation/Validator/StringValidator.php";s:4:"5aba";s:46:"Classes/Validation/Validator/TextValidator.php";s:4:"b359";s:51:"Classes/Validation/Validator/ValidatorInterface.php";s:4:"1c82";s:24:"Documentation/README.txt";s:4:"35d4";s:22:"Tests/BaseTestCase.php";s:4:"8548";s:60:"Tests/Configuration/BackendConfigurationManager_testcase.php";s:4:"8fa5";s:61:"Tests/Configuration/FrontendConfigurationManager_testcase.php";s:4:"d1d2";s:46:"Tests/DomainObject/AbstractEntity_testcase.php";s:4:"80c4";s:25:"Tests/Fixtures/Entity.php";s:4:"8af7";s:52:"Tests/MVC/Controller/AbstractController_testcase.php";s:4:"7d2c";s:50:"Tests/MVC/Controller/ActionController_testcase.php";s:4:"107d";s:42:"Tests/MVC/Controller/Argument_testcase.php";s:4:"edaa";s:43:"Tests/MVC/Controller/Arguments_testcase.php";s:4:"5bb9";s:41:"Tests/MVC/Web/RequestBuilder_testcase.php";s:4:"c537";s:45:"Tests/MVC/Web/Routing/UriBuilder_testcase.php";s:4:"70a7";s:44:"Tests/Persistence/ObjectStorage_testcase.php";s:4:"5a12";s:36:"Tests/Persistence/Query_testcase.php";s:4:"249e";s:41:"Tests/Persistence/Repository_testcase.php";s:4:"c0f8";s:38:"Tests/Persistence/Session_testcase.php";s:4:"6f9f";s:45:"Tests/Persistence/Mapper/DataMap_testcase.php";s:4:"98ec";s:53:"Tests/Persistence/Storage/Typo3DbBackend_testcase.php";s:4:"effd";s:37:"Tests/Reflection/Service_testcase.php";s:4:"b1e1";s:54:"Tests/Security/Channel/RequestHashService_testcase.php";s:4:"6c8a";s:52:"Tests/Security/Cryptography/HashService_testcase.php";s:4:"3ae2";s:36:"Tests/Utility/Extension_testcase.php";s:4:"ad36";s:37:"Tests/Utility/TypoScript_testcase.php";s:4:"bb97";s:47:"Tests/Validation/ValidatorResolver_testcase.php";s:4:"ecca";s:61:"Tests/Validation/Validator/AlphanumericValidator_testcase.php";s:4:"313c";s:60:"Tests/Validation/Validator/ConjunctionValidator_testcase.php";s:4:"39c2";s:57:"Tests/Validation/Validator/DateTimeValidator_testcase.php";s:4:"62c8";s:61:"Tests/Validation/Validator/EmailAddressValidator_testcase.php";s:4:"7f92";s:54:"Tests/Validation/Validator/FloatValidator_testcase.php";s:4:"4f3b";s:62:"Tests/Validation/Validator/GenericObjectValidator_testcase.php";s:4:"c0d2";s:56:"Tests/Validation/Validator/IntegerValidator_testcase.php";s:4:"b3b7";s:57:"Tests/Validation/Validator/NotEmptyValidator_testcase.php";s:4:"b714";s:60:"Tests/Validation/Validator/NumberRangeValidator_testcase.php";s:4:"70ec";s:55:"Tests/Validation/Validator/NumberValidator_testcase.php";s:4:"af8b";s:52:"Tests/Validation/Validator/RawValidator_testcase.php";s:4:"2fe1";s:66:"Tests/Validation/Validator/RegularExpressionValidator_testcase.php";s:4:"1aa9";s:61:"Tests/Validation/Validator/StringLengthValidator_testcase.php";s:4:"5afc";s:53:"Tests/Validation/Validator/TextValidator_testcase.php";s:4:"5454";}',
);

?>