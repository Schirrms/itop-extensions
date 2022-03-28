<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2013 XXXXX
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('EN US', 'English', 'English', array(
	// Dictionary entries go here
//Kubernetes
	'Class:Kubernetes/Attribute:applicationsolution_id' => 'Application Solution',
	'Class:Kubernetes/Attribute:k8snamespace_id' => 'Kubernetes Namespace',
	'Class:Kubernetes/Attribute:description' => 'description',
	'Class:Kubernetes/Attribute:person_list' => 'Contacts',
	'Class:Kubernetes/Attribute:person_list+' => 'All contacts linked to this object',
	'Class:Kubernetes/Attribute:org_id' => 'Organization',
	'Class:Kubernetes/Attribute:move2production' => 'Move to production',
	'Class:Kubernetes/Attribute:status' => 'Status',
	'Class:Kubernetes/Attribute:change_log' => 'Changelog',
	'Class:Kubernetes/Attribute:status/Value:stock' => 'stock',
	'Class:Kubernetes/Attribute:status/Value:production' => 'production',
	'Class:Kubernetes/Attribute:status/Value:new' => 'new',
	'Class:Kubernetes/Attribute:status/Value:error' => 'error',
	'Class:Kubernetes/Error:CanOnlyUpdateK8SObjYourself' => '%1$s is not under your name, you do not have editing rights',
	'Menu:KubernetesTypology' => 'Kubernetes type configuration',
	'Class:Kubernetes/Error:MustBeUnique' => 'This %2$s object %1$s already exists',
));

// Controller
Dict::Add('EN US', 'English', 'English', array(
	'Class:Controller' => 'Service',
	'Class:Controller/Name' => '%1$s.%2$s',
	'Class:Controller+' => 'All Services',
	'Class:Controller/Attribute:k8snamespace_id' => 'Kubernetes Namespace',
	'Class:Controller/Attribute:applicationsolution_id' => 'Application Solution',
	'Class:Controller/Attribute:repo' => 'Reigistry',
	'Class:Controller/Attribute:image' => 'Image',
	'Class:Controller/Attribute:image_tag' => 'Image tag',
	'Class:Controller/Attribute:containerport' => 'Container port',
	'Class:Controller/Attribute:hostnetwork' => 'host Network',
	'Class:Controller/Attribute:replicas' => 'Number of replicas',
	'Class:Controller/Attribute:fix_replicas' => 'Number of fixed replicas',
	'Class:Controller/Attribute:command' => 'Command',
	'Class:Controller/Attribute:args' => 'Args',
	'Class:Controller/Attribute:prestop' => 'preStop(seconds)',
	'Class:Controller/Attribute:cpu_request' => 'CPU reservation',
	'Class:Controller/Attribute:cpu_limit' => 'CPU limit',
	'Class:Controller/Attribute:mem_request' => 'Memory reservation [MB]',
	'Class:Controller/Attribute:secret' => 'Secrets',
	'Class:Controller/Attribute:rolling_strategy' => 'Update strategy',
	'Class:Controller/Attribute:hostaliases' => 'host aliases',
	'Class:Controller/Attribute:sidecar_list' => 'SideCar',
	'Class:Controller/Attribute:sidecar_list+' => 'All sidecars linked to this service',
	'Class:Controller/Attribute:person_list' => 'Contacts',
	'Class:Controller/Attribute:person_list+' => 'All contacts linked to this service',
	'Class:Controller/Attribute:affinity_list' => 'Affinity',
	'Class:Controller/Attribute:affinity_list+' => 'All affinity linked to this service',
	'Class:Controller/Attribute:volume_list' => 'Volumes',
	'Class:Controller/Attribute:volume_list+' => 'All volumes linked to this service',
	'Class:Controller/Attribute:probe_list' => 'Health',
	'Class:Controller/Attribute:probe_list+' => 'All health check probes for this service',
	'Menu:Controller' => 'Service',
	'Menu:Controller+' => 'All Services',
	'Controller:baseinfo' => 'Basic information',
	'Controller:secret' => 'Configuration（YAML format）',
	'Controller:other' => 'Other informations',
	'Class:Controller/Error:SecretShouldBeYamlFormat' => 'Configuration items must be in YAML format',
	'Class:Controller/Error:ReservedAppNameNotAllowed' => '%1$s is a reserved name, deployment is not allowed',
	'Class:Controller/Error:CpuLimitCanNotLessThanCpuRequest' => 'CPU limit value must be greater than or equal to CPU request value',
	'Class:Controller/Error:maxSurgeAndmaxUnavailableCannotBeZeroBoth' => 'maxUnavailable: maxSurge cannot be 0 at the same time',
	'Class:Controller/Error:hostaliasesShouldBeYamlFormat' => 'Custom hosts must be in YAML format',
	'Class:Controller/Error:IpIsInvalid' => 'Custom hosts contain illegal IP: %1$s',
	'Class:Controller/Error:DomainIsInvalid' => 'Custom hosts contain illegal domain name: %1$s',
	'Class:Controller/Error:CommandAndArgsShouldBeArray' => 'command and args should be PHP arrays. %1$s',
	'Class:Controller/Error:ContainerPortMustBeInteger' => 'Illegal port value: %1$s, container port must be an integer',
	'Class:Controller/Error:ContainerPortRange' => 'Illegal port value: %1$s, container port must be between 1~65535',
	'Class:Controller/Tab:Debug' => 'debbuging',
));

// Deployment
Dict::Add('EN US', 'English', 'English', array(
	'Class:Deployment' => 'Deployment',
	'Class:Deployment/Name' => '%1$s.%2$s',
	'Class:Deployment+' => 'All deployments',
	'Class:Deployment/Attribute:type' => 'Type of',
	'Class:Deployment/Attribute:type/Value:web' => 'HTTP service',
	'Class:Deployment/Attribute:type/Value:worker' => 'Background service',
	'Class:Deployment/Attribute:url' => 'URL',
	'Class:Deployment/Attribute:https' => 'HTTPS',
	'Class:Deployment/Attribute:https/Value:on' => 'on',
	'Class:Deployment/Attribute:https/Value:off' => 'off',
	'Class:Deployment/Attribute:ingress_list' => 'Load balancer',
	'Class:Deployment/Attribute:ingress_list+' => 'All load balancers linked to this deployment - stateless service',
	'Class:Deployment/Attribute:ingressannotations_list' => 'Nginx',
	'Class:Deployment/Attribute:ingressannotations_list+' => 'Custom Nginx configuration',
	'Menu:Deployment' => 'Deployment',
	'Menu:Deployment+' => 'All deployments',
	'Class:Deployment/Stimulus:ev_online' => 'online',
	'Class:Deployment/Stimulus:ev_offline' => 'offline',
	'Class:Deployment/Stimulus:ev_update' => 'update',
	'Deployment:baseinfo' => 'Basic Information',
	'Deployment:secret' => 'APP configuration item（YAML format）',
	'Deployment:other' => 'other informations',
));

// ApplicationSolution
Dict::Add('EN US', 'English', 'English', array(
	'Class:ApplicationSolution/Attribute:controller_list' => 'Kubernetes service',
	'Class:ApplicationSolution/Attribute:controller_list+' => 'All Kubernetes services for this APP',
));

// K8sAffinity
Dict::Add('EN US', 'English', 'English', array(
	'Class:K8sAffinity/Attribute:affinitytype' => 'Affinity type',
	'Class:K8sAffinity/Attribute:labeltype' => 'Label type',
	'Class:K8sAffinity/Attribute:requiretype' => 'Affinity strength',
	'Class:K8sAffinity/Attribute:topologykey' => 'topology Key',
	'Class:K8sAffinity/Attribute:operator' => 'operator',
	'Class:K8sAffinity/Attribute:expressions' => 'expressions',
	'Class:K8sAffinity/Attribute:note' => 'Comment',
	'Class:K8sAffinity/Attribute:deployment_list' => 'Deployments',
	'Class:K8sAffinity/Error:ExpressionsShouldBeYamlFormat' => 'Expression must be in YAML format',
));

// lnkK8sAffinityToController
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkK8sAffinityToController/Attribute:k8saffinity_id' => 'K8s Affinity',
	'Class:lnkK8sAffinityToController/Attribute:k8saffinity_name' => 'K8s Affinity name',
	'Class:lnkK8sAffinityToController/Attribute:controller_id' => 'K8S Service',
	'Class:lnkK8sAffinityToController/Attribute:controller_name' => 'K8S Service name',
	'Class:lnkK8sAffinityToController/Attribute:group' => 'group',
	'Class:lnkK8sAffinityToController/Attribute:values' => 'expressions (?) VALUES',
	'Class:lnkK8sAffinityToController/Error:ModifyNotAllowed' => 'Modification of %1$s is not allowed',
	'Class:lnkK8sAffinityToController/Error:ThisLnkAlreadyExists' => '%1$s already exists',
));

// K8sVolume
Dict::Add('EN US', 'English', 'English', array(
	'Class:K8sVolume/Attribute:volumetype' => 'Volume type',
	'Class:K8sVolume/Attribute:storageclass' => 'StorageClass',
	'Class:K8sVolume/Attribute:accessmodes' => 'Access Mode',
	'Class:K8sVolume/Attribute:note' => 'Comment',
	'Class:K8sVolume/Attribute:controller_list' => 'Services',
	'Class:K8sVolume/Attribute:controller_list+' => 'All services linked to this Volume',
));

// lnkK8sVolumeToController
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkK8sVolumeToController/Attribute:k8svolume_type' => 'Volume type',
	'Class:lnkK8sVolumeToController/Attribute:controller_id' => 'K8S Service',
	'Class:lnkK8sVolumeToController/Attribute:k8svolume_note' => 'Comment',
	'Class:lnkK8sVolumeToController/Attribute:mountpath' => 'Mount path',
	'Class:lnkK8sVolumeToController/Attribute:storage' => 'Capacity (Gi)',
	'Class:lnkK8sVolumeToController/Attribute:k8svolume_id' => 'Volume',
	'Class:lnkK8sVolumeToController/Error:StorageMustGreaterThanPrevious' => 'Volume does not support shrinking: %1$s'
));

// K8sIngressAnnotations
Dict::Add('EN US', 'English', 'English', array(
	'Class:K8sIngressAnnotations' => 'Custom Nginx configuration',
	'Class:K8sIngressAnnotations/Attribute:name' => 'Custom Nginx configuration',
	'Class:K8sIngressAnnotations/Attribute:note' => 'Comment',
	'Class:K8sIngressAnnotations/Attribute:enable' => 'Enable on/off',
	'Class:K8sIngressAnnotations/Attribute:adminonly' => 'Management only',
	'Class:K8sIngressAnnotations/Attribute:default_value' => 'Defaults',
	'Class:K8sIngressAnnotations/Attribute:description' => 'description',
	'Class:K8sIngressAnnotations/Attribute:validate' => 'Validation',
	'Class:K8sIngressAnnotations/Attribute:deployment_list' => 'Deployments',
	'Class:K8sIngressAnnotations/Attribute:deployment_list+' => 'All deployments for this ingress',
	'Class:K8sIngressAnnotations/Attribute:ingress_list' => 'Load balancer',
	'Class:K8sIngressAnnotations/Attribute:ingress_list+' => 'All load balancers',
));

// lnkK8sIngressAnnotationsToDeployment
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:value' => 'Configuration value',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:enable' => 'enable',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:enable/Value:yes' => 'yes',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:enable/Value:no' => 'no',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:deployment_id' => 'Deployment',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_id' => 'Configuration item',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_id' => 'Configuration item',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_name' => 'Configuration item',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_note' => 'Comment',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_description' => 'description',
	'Class:lnkK8sIngressAnnotationsToDeployment/Attribute:k8singressannotations_validate' => 'Configuration value check',
	'Class:lnkK8sIngressAnnotationsToDeployment/Error:AdminOnly' => 'Please contact your administrator to add or update this configuration: %1$s',
));

// lnkK8sIngressAnnotationsToIngress
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:value' => 'Configuration value',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:enable' => 'enable',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:enable/Value:yes' => 'Yes',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:enable/Value:no' => 'No',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:ingress_id' => 'Load balancer',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_id' => 'Configuration item',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_id' => 'Configuration item',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_name' => 'Configuration item',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_note' => 'Comment',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_description' => 'Detail',
	'Class:lnkK8sIngressAnnotationsToIngress/Attribute:k8singressannotations_validate' => 'Configuration value Check',
	'Class:lnkK8sIngressAnnotationsToIngress/Error:AdminOnly' => 'Please contact your administrator to add or update this configuration: %1$s',
	'Class:lnkK8sIngressAnnotationsToIngress/Error:ValueNotValid' => 'The configuration value is invalid %1$s',
));

// Configuration
Dict::Add('EN US', 'English', 'English', array(
	'Class:Configuration' => 'Configuration item',
	'Class:Configuration+' => 'All configuration items',
	'Menu:Configuration' =>'Configuration item',
	'Menu:Configuration+' =>'All configuration items',
));

// Ingress
Dict::Add('EN US', 'English', 'English', array(
	'Class:Ingress' => 'Load Balancer',
	'Class:Ingress/Name' => '%1$s%2$s',
	'Class:Ingress+' => 'All laod balancers',
	'Class:Ingress/Attribute:k8snamespace_id' => 'Kubernetes Namespace',
	'Class:Ingress/Attribute:applicationsolution_id' => 'Application Solution',
	'Class:Ingress/Attribute:domain_id' => 'domain name',
	'Class:Ingress/Attribute:location' => 'Location',
	'Class:Ingress/Attribute:serviceport' => 'Service port',
	'Class:Ingress/Attribute:deployment_id' => 'Deployment/Stateless service',
	'Class:Ingress/Attribute:person_list' => 'Contact',
	'Class:Ingress/Attribute:person_list+' => 'All contacts linked to this load balancer',
	'Class:Ingress/Attribute:ingressannotations_list' => 'Custom Nginx configuration',
	'Class:Ingress/Attribute:ingressannotations_list+' => 'All custom Nginx configurations for this load balancer',
	'Class:Ingress/Attribute:https' => 'HTTPS',
	'Class:Ingress/Attribute:url' => 'URL',
	'Class:Ingress/Attribute:https/Value:on' => 'on',
	'Class:Ingress/Attribute:https/Value:off' => 'off',
	'Class:Ingress/Attribute:type' => 'Type of',
	'Class:Ingress/Attribute:domaincheck' => 'Domain check',
	'Class:Ingress/Attribute:custom_cert' => 'Use custom certificate',
	'Class:Ingress/Attribute:cert_name' => 'Custom certificate name',
	'Class:Ingress/Attribute:type/Value:internal' => 'Internal services',
	'Class:Ingress/Attribute:type/Value:external' => 'External services',
	'Class:Ingress/Attribute:endpoints' => 'Endpoint (only valid for external services)',
	'Class:Ingress/Attribute:manage_svc' => 'Service to manage',
	'Class:Ingress/Attribute:manage_svc/Value:yes' => 'yes',
	'Class:Ingress/Attribute:manage_svc/Value:no' => 'no',
	'Class:Ingress/Attribute:manage_svc/Value:clean' => 'clean up',
	'Menu:Ingress' => 'Load balancer',
	'Menu:Ingress+' => 'All load balancers',
	'Class:Ingress/Stimulus:ev_update' => 'update',
	'Class:Ingress/Stimulus:ev_online' => 'online',
	'Class:Ingress/Stimulus:ev_offline' => 'offline',
	'Ingress:other' => 'other informations',
	'Class:Ingress/Warning:typeChange' => 'warn! You have changed the load balancing type, please make sure to fully understand the meaning and consequences of changing this option. If you do not understand, please give up this operation! Please refer to the documentation for details: %1$s',
	'Class:Ingress/Error:ExternalLoadbalancerMustProvideEndpoints' => 'External service load balancing must configure endpoints',
	'Class:Ingress/Error:InvalidIPAddress' => 'Endpoint contains illegal IP address %1$s',
	'Class:Ingress/Warning:buttonCancel' => 'Cancel operation',
	'Class:Ingress/Warning:buttonOk' => 'I understand the risks, go ahead',
	'Class:Ingress/Warning:title' => 'Dangerous operation!',
	'Class:Ingress/Error:ReservedDomainPattern' => 'The reserved domain name format %1$s is not allowed to create a load balancer',
	'Class:Ingress/Error:IngressMustBeUnique' => 'The load balancer object %1$s already exists',
	'Class:Ingress/Error:InternalServiceMustHaveDeployment' => 'APP %2$s has not created stateless service %1$s, cannot add load balancing of type internal service',
));

// Secret
Dict::Add('EN US', 'English', 'English', array(
	'Class:Secret' => 'APP Configuration item',
	'Class:Secret/Name' => '%1$s.%2$s',
	'Class:Secret+' => 'All APP configuration items',
	'Class:Secret/Attribute:name' => 'Name',
	'Class:Secret/Attribute:data' => 'Configuration data',
	'Class:Secret/Attribute:person_list' => 'Contacts',
	'Class:Secret/Attribute:person_list+' => 'All contacts linked to this secret',
	'Class:Secret/Attribute:deployment_list' => 'Deployment',
	'Class:Secret/Attribute:deployment_list+' => 'All deployments using this secret',
	'Menu:Secret' => 'APP Secrets',
	'Menu:Secret+' => 'All APP Secrets',	
	'Class:Secret/Stimulus:ev_online' => 'online',
	'Class:Secret/Stimulus:ev_offline' => 'ofline',	
	'Class:Secret/Stimulus:ev_update' => 'update',
	'Secret:other' => 'other informations',
));

//K8sNamespace
Dict::Add('EN US', 'English', 'English', array(
	'Class:K8sNamespace' => 'Kubernetes Namespace',
	'Class:K8sNamespace+' => 'All Kubernetes Namespaces',
	'Class:K8sNamespace/Attribute:name' => 'Name',
	'Class:K8sNamespace/Attribute:domain' => 'Domain',
	'Class:K8sNamespace/Attribute:cname' => 'CNAME address',
	'Class:K8sNamespace/Attribute:lbtype' => 'LB type',
	'Class:K8sNamespace/Attribute:lbtype/Value:develop' => 'development',
	'Class:K8sNamespace/Attribute:lbtype/Value:test' => 'test',
	'Class:K8sNamespace/Attribute:lbtype/Value:production' => 'production',
	'Class:K8sNamespace/Attribute:note' => 'Comment',
	'Class:K8sNamespace/Attribute:deployment_list' => 'Deployment',
	'Class:K8sNamespace/Attribute:deployment_list+' => 'All deployments on this cluster',
	'Class:K8sNamespace/Attribute:ingress_list' => 'Load balancers',
	'Class:K8sNamespace/Attribute:ingress_list+' => 'All load balancer on this cluster',
	'Menu:K8sNamespace' => 'Kubernetes Namespace',
	'Menu:K8sNamespace+' => 'All Kubernetes Namespaces',
));

//K8sProbe
Dict::Add('EN US', 'English', 'English', array(
	'Class:K8sProbe' => 'Probe / health check',
	'Class:K8sProbe/Attribute:description' => 'Description',
	'Class:K8sProbe/Attribute:controller_list' => 'Services',
	'Class:K8sProbe/Attribute:controller_list+' => 'All Kubernetes services',
));

//lnkK8sProbeToController
Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkK8sProbeToController/Attribute:type' => 'Probe type',
	'Class:lnkK8sProbeToController/Attribute:enable' => 'Wheter to enable',
	'Class:lnkK8sProbeToController/Attribute:k8sprobe_id' => 'Probe',
	'Class:lnkK8sProbeToController/Attribute:controller_id' => 'Service',
	'Class:lnkK8sProbeToController/Attribute:common_conf' => 'Probe basic configuration',
	'Class:lnkK8sProbeToController/Attribute:tcpSocket_port' => 'tcpPort',
	'Class:lnkK8sProbeToController/Attribute:exec_command' => 'Command',
	'lnkK8sProbeToController:httpGet' => 'httpGet probe',
	'lnkK8sProbeToController:tcpSocket' => 'tcp probe',
	'lnkK8sProbeToController:exec' => 'Command probe',
	'Class:lnkK8sProbeToController/Error:InvalidValueMinValueShouldBeOne' => 'periodSeconds,timeoutSeconds,successThreshold,failureThreshold is 1: invalid value of %1$s',
	'Class:lnkK8sProbeToController/Error:InvalidValueMinValueShouldBeZero' => 'Minimum value should be 0: %1$s',
	'Class:lnkK8sProbeToController/Error:CommonConfMustBeYaml' => 'Probe base configuration must be in YAML format: %1$s',
	'Class:lnkK8sProbeToController/Error:InvalidValueMustEqOne' => 'successThreshold in livenessProbe must be 1: %1$s',
	'Class:lnkK8sProbeToController/Error:CommandMustBeYaml' => 'Command must be in YAML format: %1$s',
	'Class:lnkK8sProbeToController/Error:httpGetMustSetPathAndPort' => 'httpGet must set path and port: %1$s',
	'Class:lnkK8sProbeToController/Error:InvalidValueHttpHeaders' => 'httpHeaders malformed: %1$s',
	'Class:lnkK8sProbeToController/Error:InvalidValuePort' => 'Illegal port value: %1$s',
	'Class:lnkK8sProbeToController/Error:httpGetMustBeYaml' => 'httpGet must be in YAML format: %1$s',
	'Class:lnkK8sProbeToController/Error:ThisLnkAlreadyExists' => 'This link already exists: %1$s',
));

//K8sAppStore
Dict::Add('EN US', 'English', 'English', array(
	'Class:K8sAppStore' => 'App Store',
	'Class:K8sAppStore/Attribute:name' => 'name',
	'Class:K8sAppStore/Attribute:doc' => 'document',
	'Class:K8sAppStore/Attribute:person_list' => 'Maintainer',
	'Class:K8sAppStore/Attribute:person_list+' => 'All maintainers',
	'Class:K8sAppStore/Attribute:k8sappstore_id_finalclass_recall' => 'Object type',
	'Class:SideCar' => 'SideCar',
	'Class:SideCarVer' => 'SideCar version',
	'Class:SideCarVer/Attribute:controller_list' => 'Kubernetes Service',
	'Class:SideCarVer/Attribute:controller_list+' => 'Use this SideCar\'s Kubernetes service',
	'Class:SideCarVer/Stimulus:ev_online' => 'production',
	'Class:SideCarVer/Stimulus:ev_new' => 'new',
	'Class:SideCarVer/Stimulus:ev_offline' => 'outdated',
	'Class:AppTemplate' => 'Service templates',
	'Class:AppTemplateVer' => 'Service template version',
	'Menu:K8sAppStore' => 'App Store',
	'Menu:SideCar' => 'SideCar',
	'Menu:SideCarVer' => 'SideCar version',
	'Menu:SideCarVer+' => 'SideCar version',
	'Menu:AppTemplateVer' => 'Service template version',
	'Menu:AppTemplateVer+' => 'Service Template version',
	'Menu:AppTemplate' => 'Service template',
	'Menu:K8sAppStore+' => 'app Store',
	'Menu:SideCar+' => 'SideCar',	
	'Menu:AppTemplate+' => 'Service template',
	'Class:SideCar/Attribute:version_list' => 'Version list',
	'Class:SideCar/Attribute:version_list+' => 'All versions',
	'Class:AppTemplate/Attribute:version_list' => 'Version list',
	'Class:AppTemplate/Attribute:version_list+' => 'All versions',
	'Class:SideCarVer/Attribute:status/Value:new' => 'testing',
	'Class:SideCarVer/Attribute:status/Value:production' => 'published',
	'Class:SideCarVer/Attribute:status/Value:error' => 'error',
	'Class:SideCarVer/Attribute:status/Value:stock' => 'obsolete',
	'Class:SideCarVer/Attribute:sidecar_id' => 'App Store Object',
	'Class:SideCarVer/Attribute:version' => 'Version number',
	'Class:AppTemplateVer/Attribute:status/Value:new' => 'testing',
	'Class:AppTemplateVer/Attribute:status/Value:production' => 'published',
	'Class:AppTemplateVer/Attribute:status/Value:error' => 'error',
	'Class:AppTemplateVer/Attribute:status/Value:stock' => 'obsolete',
	'Class:AppTemplateVer/Attribute:apptemplate_id' => 'App Store Object',
	'Class:AppTemplateVer/Attribute:version' => 'Version number',
	'Class:SideCarVer/Attribute:sidecar_id_finalclass_recall' => 'Type of',
	'Class:SideCarVer/Error:ThisVerStillUsed' => 'This SideCar is still in use - %1$s',
	'Class:SideCarVer/Error:ThisVerStillUsedByProduction' => 'This SideCar version is in use by an online service - %1$s',
	'Class:lnkSideCarVerToController/Attribute:cpu_request' => 'CPU request',
	'Class:lnkSideCarVerToController/Attribute:cpu_limit' => 'CPU limit',
	'Class:lnkSideCarVerToController/Attribute:mem_request' => 'Memory request',
	'Class:lnkSideCarVerToController/Attribute:containerport' => 'Port',
	'Class:lnkSideCarVerToController/Attribute:sidecarver_id' => 'SideCar version',
	'Class:lnkSideCarVerToController/Error:StockSideCarCanNotBeLinked' => 'Cannot use obsolete SideCar %1$s',
	'Class:lnkSideCarVerToController/Error:ProductionNsMustUseProductionSideCar' => 'Online Cluster must use published SideCar %1$s',
));
