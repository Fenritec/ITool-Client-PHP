<?php

namespace FenritecEu\ItoolClientPhp\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\CheckArray;
use FenritecEu\ItoolClientPhp\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class V1ClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1Client';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1Client';
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []) : mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1Client();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrsId', $data)) {
                $object->setTrsId($data['TrsId']);
                unset($data['TrsId']);
            }
            if (\array_key_exists('Code', $data)) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            if (\array_key_exists('TrsRaisonSociale', $data)) {
                $object->setTrsRaisonSociale($data['TrsRaisonSociale']);
                unset($data['TrsRaisonSociale']);
            }
            if (\array_key_exists('FamDesignation', $data)) {
                $object->setFamDesignation($data['FamDesignation']);
                unset($data['FamDesignation']);
            }
            if (\array_key_exists('FormeJuridique', $data)) {
                $object->setFormeJuridique($data['FormeJuridique']);
                unset($data['FormeJuridique']);
            }
            if (\array_key_exists('TrsObservation', $data)) {
                $object->setTrsObservation($data['TrsObservation']);
                unset($data['TrsObservation']);
            }
            if (\array_key_exists('TrsNumeroTVA', $data)) {
                $object->setTrsNumeroTVA($data['TrsNumeroTVA']);
                unset($data['TrsNumeroTVA']);
            }
            if (\array_key_exists('TauxRemise', $data)) {
                $object->setTauxRemise($data['TauxRemise']);
                unset($data['TauxRemise']);
            }
            if (\array_key_exists('numero_tel', $data)) {
                $object->setNumeroTel($data['numero_tel']);
                unset($data['numero_tel']);
            }
            if (\array_key_exists('numero_fax', $data)) {
                $object->setNumeroFax($data['numero_fax']);
                unset($data['numero_fax']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('urlSite', $data)) {
                $object->setUrlSite($data['urlSite']);
                unset($data['urlSite']);
            }
            if (\array_key_exists('urlLien', $data)) {
                $object->setUrlLien($data['urlLien']);
                unset($data['urlLien']);
            }
            if (\array_key_exists('ClientPropriete', $data)) {
                $object->setClientPropriete($this->denormalizer->denormalize($data['ClientPropriete'], 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete', 'json', $context));
                unset($data['ClientPropriete']);
            }
            if (\array_key_exists('ClientFacto', $data)) {
                $object->setClientFacto($this->denormalizer->denormalize($data['ClientFacto'], 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientFacto', 'json', $context));
                unset($data['ClientFacto']);
            }
            if (\array_key_exists('AdrFacturation', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['AdrFacturation'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setAdrFacturation($values);
                unset($data['AdrFacturation']);
            }
            if (\array_key_exists('AdrLivraison', $data)) {
                $values_1 = [];
                foreach ($data['AdrLivraison'] as $value_1) {
                    $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setAdrLivraison($values_1);
                unset($data['AdrLivraison']);
            }
            if (\array_key_exists('AdrClient', $data)) {
                $object->setAdrClient($this->denormalizer->denormalize($data['AdrClient'], 'FenritecEu\\ItoolClientPhp\\Model\\V1Adresse', 'json', $context));
                unset($data['AdrClient']);
            }
            if (\array_key_exists('Contact', $data)) {
                $object->setContact($this->denormalizer->denormalize($data['Contact'], 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact', 'json', $context));
                unset($data['Contact']);
            }
            if (\array_key_exists('TrsTypeClient', $data)) {
                $object->setTrsTypeClient($data['TrsTypeClient']);
                unset($data['TrsTypeClient']);
            }
            if (\array_key_exists('TrsCodeServiceAcheteur', $data)) {
                $object->setTrsCodeServiceAcheteur($data['TrsCodeServiceAcheteur']);
                unset($data['TrsCodeServiceAcheteur']);
            }
            if (\array_key_exists('TrsSiret', $data)) {
                $object->setTrsSiret($data['TrsSiret']);
                unset($data['TrsSiret']);
            }
            foreach ($data as $key_2 => $value_3) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []) : array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('trsId') && null !== $object->getTrsId()) {
                $data['TrsId'] = $object->getTrsId();
            }
            $data['Code'] = $object->getCode();
            $data['TrsRaisonSociale'] = $object->getTrsRaisonSociale();
            $data['FamDesignation'] = $object->getFamDesignation();
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['FormeJuridique'] = $object->getFormeJuridique();
            }
            if ($object->isInitialized('trsObservation') && null !== $object->getTrsObservation()) {
                $data['TrsObservation'] = $object->getTrsObservation();
            }
            if ($object->isInitialized('trsNumeroTVA') && null !== $object->getTrsNumeroTVA()) {
                $data['TrsNumeroTVA'] = $object->getTrsNumeroTVA();
            }
            if ($object->isInitialized('tauxRemise') && null !== $object->getTauxRemise()) {
                $data['TauxRemise'] = $object->getTauxRemise();
            }
            if ($object->isInitialized('numeroTel') && null !== $object->getNumeroTel()) {
                $data['numero_tel'] = $object->getNumeroTel();
            }
            if ($object->isInitialized('numeroFax') && null !== $object->getNumeroFax()) {
                $data['numero_fax'] = $object->getNumeroFax();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('urlSite') && null !== $object->getUrlSite()) {
                $data['urlSite'] = $object->getUrlSite();
            }
            if ($object->isInitialized('urlLien') && null !== $object->getUrlLien()) {
                $data['urlLien'] = $object->getUrlLien();
            }
            $data['ClientPropriete'] = $this->normalizer->normalize($object->getClientPropriete(), 'json', $context);
            if ($object->isInitialized('clientFacto') && null !== $object->getClientFacto()) {
                $data['ClientFacto'] = $this->normalizer->normalize($object->getClientFacto(), 'json', $context);
            }
            if ($object->isInitialized('adrFacturation') && null !== $object->getAdrFacturation()) {
                $values = [];
                foreach ($object->getAdrFacturation() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['AdrFacturation'] = $values;
            }
            if ($object->isInitialized('adrLivraison') && null !== $object->getAdrLivraison()) {
                $values_1 = [];
                foreach ($object->getAdrLivraison() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['AdrLivraison'] = $values_1;
            }
            if ($object->isInitialized('adrClient') && null !== $object->getAdrClient()) {
                $data['AdrClient'] = $this->normalizer->normalize($object->getAdrClient(), 'json', $context);
            }
            if ($object->isInitialized('contact') && null !== $object->getContact()) {
                $data['Contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
            }
            if ($object->isInitialized('trsTypeClient') && null !== $object->getTrsTypeClient()) {
                $data['TrsTypeClient'] = $object->getTrsTypeClient();
            }
            if ($object->isInitialized('trsCodeServiceAcheteur') && null !== $object->getTrsCodeServiceAcheteur()) {
                $data['TrsCodeServiceAcheteur'] = $object->getTrsCodeServiceAcheteur();
            }
            if ($object->isInitialized('trsSiret') && null !== $object->getTrsSiret()) {
                $data['TrsSiret'] = $object->getTrsSiret();
            }
            foreach ($object as $key_2 => $value_3) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1Client' => false];
        }
    }
} else {
    class V1ClientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []) : bool
        {
            return $type === 'FenritecEu\\ItoolClientPhp\\Model\\V1Client';
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []) : bool
        {
            return is_object($data) && get_class($data) === 'FenritecEu\\ItoolClientPhp\\Model\\V1Client';
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \FenritecEu\ItoolClientPhp\Model\V1Client();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('TrsId', $data)) {
                $object->setTrsId($data['TrsId']);
                unset($data['TrsId']);
            }
            if (\array_key_exists('Code', $data)) {
                $object->setCode($data['Code']);
                unset($data['Code']);
            }
            if (\array_key_exists('TrsRaisonSociale', $data)) {
                $object->setTrsRaisonSociale($data['TrsRaisonSociale']);
                unset($data['TrsRaisonSociale']);
            }
            if (\array_key_exists('FamDesignation', $data)) {
                $object->setFamDesignation($data['FamDesignation']);
                unset($data['FamDesignation']);
            }
            if (\array_key_exists('FormeJuridique', $data)) {
                $object->setFormeJuridique($data['FormeJuridique']);
                unset($data['FormeJuridique']);
            }
            if (\array_key_exists('TrsObservation', $data)) {
                $object->setTrsObservation($data['TrsObservation']);
                unset($data['TrsObservation']);
            }
            if (\array_key_exists('TrsNumeroTVA', $data)) {
                $object->setTrsNumeroTVA($data['TrsNumeroTVA']);
                unset($data['TrsNumeroTVA']);
            }
            if (\array_key_exists('TauxRemise', $data)) {
                $object->setTauxRemise($data['TauxRemise']);
                unset($data['TauxRemise']);
            }
            if (\array_key_exists('numero_tel', $data)) {
                $object->setNumeroTel($data['numero_tel']);
                unset($data['numero_tel']);
            }
            if (\array_key_exists('numero_fax', $data)) {
                $object->setNumeroFax($data['numero_fax']);
                unset($data['numero_fax']);
            }
            if (\array_key_exists('email', $data)) {
                $object->setEmail($data['email']);
                unset($data['email']);
            }
            if (\array_key_exists('urlSite', $data)) {
                $object->setUrlSite($data['urlSite']);
                unset($data['urlSite']);
            }
            if (\array_key_exists('urlLien', $data)) {
                $object->setUrlLien($data['urlLien']);
                unset($data['urlLien']);
            }
            if (\array_key_exists('ClientPropriete', $data)) {
                $object->setClientPropriete($this->denormalizer->denormalize($data['ClientPropriete'], 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientPropriete', 'json', $context));
                unset($data['ClientPropriete']);
            }
            if (\array_key_exists('ClientFacto', $data)) {
                $object->setClientFacto($this->denormalizer->denormalize($data['ClientFacto'], 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientClientFacto', 'json', $context));
                unset($data['ClientFacto']);
            }
            if (\array_key_exists('AdrFacturation', $data)) {
                $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($data['AdrFacturation'] as $key => $value) {
                    $values[$key] = $value;
                }
                $object->setAdrFacturation($values);
                unset($data['AdrFacturation']);
            }
            if (\array_key_exists('AdrLivraison', $data)) {
                $values_1 = [];
                foreach ($data['AdrLivraison'] as $value_1) {
                    $values_2 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $object->setAdrLivraison($values_1);
                unset($data['AdrLivraison']);
            }
            if (\array_key_exists('AdrClient', $data)) {
                $object->setAdrClient($this->denormalizer->denormalize($data['AdrClient'], 'FenritecEu\\ItoolClientPhp\\Model\\V1Adresse', 'json', $context));
                unset($data['AdrClient']);
            }
            if (\array_key_exists('Contact', $data)) {
                $object->setContact($this->denormalizer->denormalize($data['Contact'], 'FenritecEu\\ItoolClientPhp\\Model\\V1ClientContact', 'json', $context));
                unset($data['Contact']);
            }
            if (\array_key_exists('TrsTypeClient', $data)) {
                $object->setTrsTypeClient($data['TrsTypeClient']);
                unset($data['TrsTypeClient']);
            }
            if (\array_key_exists('TrsCodeServiceAcheteur', $data)) {
                $object->setTrsCodeServiceAcheteur($data['TrsCodeServiceAcheteur']);
                unset($data['TrsCodeServiceAcheteur']);
            }
            if (\array_key_exists('TrsSiret', $data)) {
                $object->setTrsSiret($data['TrsSiret']);
                unset($data['TrsSiret']);
            }
            foreach ($data as $key_2 => $value_3) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $object[$key_2] = $value_3;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('trsId') && null !== $object->getTrsId()) {
                $data['TrsId'] = $object->getTrsId();
            }
            $data['Code'] = $object->getCode();
            $data['TrsRaisonSociale'] = $object->getTrsRaisonSociale();
            $data['FamDesignation'] = $object->getFamDesignation();
            if ($object->isInitialized('formeJuridique') && null !== $object->getFormeJuridique()) {
                $data['FormeJuridique'] = $object->getFormeJuridique();
            }
            if ($object->isInitialized('trsObservation') && null !== $object->getTrsObservation()) {
                $data['TrsObservation'] = $object->getTrsObservation();
            }
            if ($object->isInitialized('trsNumeroTVA') && null !== $object->getTrsNumeroTVA()) {
                $data['TrsNumeroTVA'] = $object->getTrsNumeroTVA();
            }
            if ($object->isInitialized('tauxRemise') && null !== $object->getTauxRemise()) {
                $data['TauxRemise'] = $object->getTauxRemise();
            }
            if ($object->isInitialized('numeroTel') && null !== $object->getNumeroTel()) {
                $data['numero_tel'] = $object->getNumeroTel();
            }
            if ($object->isInitialized('numeroFax') && null !== $object->getNumeroFax()) {
                $data['numero_fax'] = $object->getNumeroFax();
            }
            if ($object->isInitialized('email') && null !== $object->getEmail()) {
                $data['email'] = $object->getEmail();
            }
            if ($object->isInitialized('urlSite') && null !== $object->getUrlSite()) {
                $data['urlSite'] = $object->getUrlSite();
            }
            if ($object->isInitialized('urlLien') && null !== $object->getUrlLien()) {
                $data['urlLien'] = $object->getUrlLien();
            }
            $data['ClientPropriete'] = $this->normalizer->normalize($object->getClientPropriete(), 'json', $context);
            if ($object->isInitialized('clientFacto') && null !== $object->getClientFacto()) {
                $data['ClientFacto'] = $this->normalizer->normalize($object->getClientFacto(), 'json', $context);
            }
            if ($object->isInitialized('adrFacturation') && null !== $object->getAdrFacturation()) {
                $values = [];
                foreach ($object->getAdrFacturation() as $key => $value) {
                    $values[$key] = $value;
                }
                $data['AdrFacturation'] = $values;
            }
            if ($object->isInitialized('adrLivraison') && null !== $object->getAdrLivraison()) {
                $values_1 = [];
                foreach ($object->getAdrLivraison() as $value_1) {
                    $values_2 = [];
                    foreach ($value_1 as $key_1 => $value_2) {
                        $values_2[$key_1] = $value_2;
                    }
                    $values_1[] = $values_2;
                }
                $data['AdrLivraison'] = $values_1;
            }
            if ($object->isInitialized('adrClient') && null !== $object->getAdrClient()) {
                $data['AdrClient'] = $this->normalizer->normalize($object->getAdrClient(), 'json', $context);
            }
            if ($object->isInitialized('contact') && null !== $object->getContact()) {
                $data['Contact'] = $this->normalizer->normalize($object->getContact(), 'json', $context);
            }
            if ($object->isInitialized('trsTypeClient') && null !== $object->getTrsTypeClient()) {
                $data['TrsTypeClient'] = $object->getTrsTypeClient();
            }
            if ($object->isInitialized('trsCodeServiceAcheteur') && null !== $object->getTrsCodeServiceAcheteur()) {
                $data['TrsCodeServiceAcheteur'] = $object->getTrsCodeServiceAcheteur();
            }
            if ($object->isInitialized('trsSiret') && null !== $object->getTrsSiret()) {
                $data['TrsSiret'] = $object->getTrsSiret();
            }
            foreach ($object as $key_2 => $value_3) {
                if (preg_match('/.*/', (string) $key_2)) {
                    $data[$key_2] = $value_3;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null) : array
        {
            return ['FenritecEu\\ItoolClientPhp\\Model\\V1Client' => false];
        }
    }
}