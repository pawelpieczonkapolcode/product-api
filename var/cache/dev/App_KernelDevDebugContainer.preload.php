<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
require __DIR__.'/ContainerAVcCLux/App_KernelDevDebugContainer.php';
require __DIR__.'/ContainerAVcCLux/getVarDumper_ServerConnectionService.php';
require __DIR__.'/ContainerAVcCLux/getVarDumper_HtmlDumperService.php';
require __DIR__.'/ContainerAVcCLux/getVarDumper_ClonerService.php';
require __DIR__.'/ContainerAVcCLux/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerAVcCLux/getValidator_ExpressionService.php';
require __DIR__.'/ContainerAVcCLux/getValidator_EmailService.php';
require __DIR__.'/ContainerAVcCLux/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerAVcCLux/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerAVcCLux/getTwigService.php';
require __DIR__.'/ContainerAVcCLux/getSession_Storage_NativeService.php';
require __DIR__.'/ContainerAVcCLux/getSessionService.php';
require __DIR__.'/ContainerAVcCLux/getServicesResetterService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_PasswordEncoderService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_ContextListener_0Service.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_Authentication_Listener_Anonymous_MainService.php';
require __DIR__.'/ContainerAVcCLux/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerAVcCLux/getSecrets_VaultService.php';
require __DIR__.'/ContainerAVcCLux/getRouting_LoaderService.php';
require __DIR__.'/ContainerAVcCLux/getPropertyAccessorService.php';
require __DIR__.'/ContainerAVcCLux/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerAVcCLux/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerAVcCLux/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_StopwatchSubscriberService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_MetadataDriverService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_IteratorHandlerService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_HandlerRegistryService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_DoctrineProxySubscriberService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_DatetimeHandlerService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_ConstraintViolationHandlerService.php';
require __DIR__.'/ContainerAVcCLux/getJmsSerializer_ArrayCollectionHandlerService.php';
require __DIR__.'/ContainerAVcCLux/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerAVcCLux/getFosRest_ViewResponseListenerService.php';
require __DIR__.'/ContainerAVcCLux/getFosRest_Serializer_JmsHandlerRegistryService.php';
require __DIR__.'/ContainerAVcCLux/getFosRest_Serializer_FormErrorHandlerService.php';
require __DIR__.'/ContainerAVcCLux/getFosRest_Decoder_JsonService.php';
require __DIR__.'/ContainerAVcCLux/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerAVcCLux/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerAVcCLux/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerAVcCLux/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerAVcCLux/getForm_Type_FormService.php';
require __DIR__.'/ContainerAVcCLux/getForm_Type_FileService.php';
require __DIR__.'/ContainerAVcCLux/getForm_Type_EntityService.php';
require __DIR__.'/ContainerAVcCLux/getForm_Type_ColorService.php';
require __DIR__.'/ContainerAVcCLux/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerAVcCLux/getForm_RegistryService.php';
require __DIR__.'/ContainerAVcCLux/getForm_FactoryService.php';
require __DIR__.'/ContainerAVcCLux/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerAVcCLux/getFilesystemService.php';
require __DIR__.'/ContainerAVcCLux/getErrorControllerService.php';
require __DIR__.'/ContainerAVcCLux/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerAVcCLux/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerAVcCLux/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_Security_Voter_Security_Access_SimpleRoleVoterService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerAVcCLux/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerAVcCLux/getDataCollector_DumpService.php';
require __DIR__.'/ContainerAVcCLux/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerAVcCLux/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerAVcCLux/getCacheClearerService.php';
require __DIR__.'/ContainerAVcCLux/getCache_SystemClearerService.php';
require __DIR__.'/ContainerAVcCLux/getCache_SystemService.php';
require __DIR__.'/ContainerAVcCLux/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerAVcCLux/getCache_AppClearerService.php';
require __DIR__.'/ContainerAVcCLux/getCache_AppService.php';
require __DIR__.'/ContainerAVcCLux/getCache_AnnotationsService.php';
require __DIR__.'/ContainerAVcCLux/getAnnotations_CacheService.php';
require __DIR__.'/ContainerAVcCLux/getTemplateControllerService.php';
require __DIR__.'/ContainerAVcCLux/getRedirectControllerService.php';
require __DIR__.'/ContainerAVcCLux/getProductRepositoryService.php';
require __DIR__.'/ContainerAVcCLux/getProductFormService.php';
require __DIR__.'/ContainerAVcCLux/getProductControllerService.php';
require __DIR__.'/ContainerAVcCLux/get_ServiceLocator_SrPvxhLService.php';
require __DIR__.'/ContainerAVcCLux/get_ServiceLocator_Beq5mCoService.php';
require __DIR__.'/ContainerAVcCLux/get_ServiceLocator_Rc9uH46Service.php';
require __DIR__.'/ContainerAVcCLux/get_ServiceLocator_P4XXEEService.php';
require __DIR__.'/ContainerAVcCLux/get_ServiceLocator_C9JCBPCService.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Symfony\Bundle\DebugBundle\DebugBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'FOS\RestBundle\FOSRestBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ProductController';
$classes[] = 'App\Service\ProductService';
$classes[] = 'App\Form\ProductForm';
$classes[] = 'App\Repository\ProductRepository';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\DoctrineProvider';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\CachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\ChainCacheClearer';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\DumpDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\DBAL\Logging\LoggerChain';
$classes[] = 'Symfony\Bridge\Doctrine\Logger\DbalLogger';
$classes[] = 'Doctrine\DBAL\Logging\DebugStack';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\PdoCacheAdapterDoctrineSchemaSubscriber';
$classes[] = 'Gedmo\Timestampable\TimestampableListener';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AnnotationDriver';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Filesystem\Filesystem';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'FOS\RestBundle\EventListener\BodyListener';
$classes[] = 'FOS\RestBundle\Decoder\ContainerDecoderProvider';
$classes[] = 'FOS\RestBundle\Decoder\JsonDecoder';
$classes[] = 'FOS\RestBundle\EventListener\FormatListener';
$classes[] = 'FOS\RestBundle\Negotiation\FormatNegotiator';
$classes[] = 'FOS\RestBundle\EventListener\ParamFetcherListener';
$classes[] = 'FOS\RestBundle\Request\ParamFetcher';
$classes[] = 'FOS\RestBundle\Request\ParamReader';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSHandlerRegistryV2';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'FOS\RestBundle\EventListener\VersionExclusionListener';
$classes[] = 'FOS\RestBundle\EventListener\VersionListener';
$classes[] = 'FOS\RestBundle\Version\ChainVersionResolver';
$classes[] = 'FOS\RestBundle\Version\Resolver\QueryParameterVersionResolver';
$classes[] = 'FOS\RestBundle\Version\Resolver\HeaderVersionResolver';
$classes[] = 'FOS\RestBundle\Version\Resolver\MediaTypeVersionResolver';
$classes[] = 'FOS\RestBundle\View\ViewHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSSerializerAdapter';
$classes[] = 'FOS\RestBundle\EventListener\ViewResponseListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\Serializer\EventDispatcher\LazyEventDispatcher';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'JMS\SerializerBundle\Serializer\StopwatchEventSubscriber';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeHelper';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AnonymousAuthenticationListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\EntryPoint\RetryAuthenticationEntryPoint';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Core\Encoder\EncoderFactory';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\Security\Core\Encoder\UserPasswordEncoder';
$classes[] = 'Symfony\Component\Security\Http\RememberMe\ResponseListener';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserProvider';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener';
$classes[] = 'Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Session';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\StreamedResponseListener';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\DumpExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeExtension';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Component\VarDumper\Cloner\VarCloner';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'Symfony\Component\VarDumper\Server\Connection';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider';
$classes[] = 'Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider';

Preloader::preload($classes);
