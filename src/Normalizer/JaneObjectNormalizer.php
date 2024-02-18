<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array('FenritecEu\\ItoolClientPhp\\Model\\V1Error' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ErrorNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ErrorErrorItem' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ErrorErrorItemNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1Adresse' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1AdresseNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1AdresseEtendueNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1DossierNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1Client' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientClientProprieteNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientFacto' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientClientFactoNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientContactNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1FamilleClientNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersGetResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersGetResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientGetResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersClientGetResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientPostResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersClientPostResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersFamillesGetResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersFamillesGetResponse200Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\FenritecEu\\ItoolClientPhp\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1Error' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ErrorErrorItem' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1Adresse' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1Client' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientFacto' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersGetResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientGetResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientPostResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersFamillesGetResponse200' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        protected $normalizers = array('FenritecEu\\ItoolClientPhp\\Model\\V1Error' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ErrorNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ErrorErrorItem' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ErrorErrorItemNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1Adresse' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1AdresseNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1AdresseEtendueNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1DossierNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1Client' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientClientProprieteNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientFacto' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientClientFactoNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ClientContactNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1FamilleClientNormalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersGetResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersGetResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientGetResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersClientGetResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientPostResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersClientPostResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200Normalizer', 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersFamillesGetResponse200' => 'FenritecEu\\ItoolClientPhp\\Normalizer\\V1ApiDossiersDosIdTiersFamillesGetResponse200Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\FenritecEu\\ItoolClientPhp\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = [];
        public function supportsDenormalization($data, $type, $format = null, array $context = []) : bool
        {
            return array_key_exists($type, $this->normalizers);
        }
        public function supportsNormalization($data, $format = null, array $context = []) : bool
        {
            return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[get_class($object)];
            $normalizer = $this->getNormalizer($normalizerClass);
            return $normalizer->normalize($object, $format, $context);
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);
            return $denormalizer->denormalize($data, $type, $format, $context);
        }
        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }
        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;
            return $normalizer;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1Error' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ErrorErrorItem' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1Adresse' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1AdresseEtendue' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1Dossier' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1Client' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientFacto' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1FamilleClient' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersGetResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientGetResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientPostResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersClientTrsIdDeleteResponse200' => false, 'FenritecEu\\ItoolClientPhp\\Model\\V1ApiDossiersDosIdTiersFamillesGetResponse200' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }
    }
}